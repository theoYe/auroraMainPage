<?php
/**
 * 后台文章管理控制器
 */
class ArticleController extends PlatformController{
    
    public function indexAction(){
        $article = Factory::M('ArticleModel');
        $artInfo = $article->getArticle();
        $this->assign('artInfo',$artInfo);
        //分页代码
        $rowsPerPage = $GLOBALS['config']['Page']['rowsPerPage'];
        $maxNum = $GLOBALS['config']['Page']['maxNum'];
        $url = "index.php?p=Admin&c=Article&a=index&";
        $rowCount = $article->getRowCount(); //获取总记录数
        $page = new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage = $page->getStrPage();
        $this->assign('strPage',$strPage);
        //显示模板
        $this->display('index.html');
    }
    public function addAction(){
        //获取分类数据
        $category = Factory::M('CategoryModel');
        $cateinfo = $category->getCategory(); 
        $this->assign('cateinfo',$cateinfo);
        //获取成员数据
        $member_m = Factory::M('MemberModel');
        $membersInfo = $member_m->getMember();
        $this->assign('membersInfo',$membersInfo);
        $this->display('add.html');
    }
    public function getPost(){
        $art = array();
        $art['cate_id'] = $this->escapeData($_POST['cate_id']);
        $art['title'] = $this->escapeData($_POST['title']);
        $art['content'] = $this->escapeData($_POST['content'],'<img><strong><p><h1><h2><h3><h4><h5><h6><br><s><em><ul><li><ol><blockquote><pre>');
        $art['art_desc'] = $this->escapeData($_POST['art_desc']);
        $art['author'] = $this->escapeData($_POST['author']);
        return $art;
    }

    public function dealAddAction()
    {
        $art = $this->getPost();
        if(empty($art['title'])  ||empty($art['content']) ||empty($art['content'])
        ||empty($art['content']) ||empty($art['content']) || empty($art['cate_id']))
        {
            $this->jump('index.php?p=Admin&c=Article&a=add','您填写的信息不完整');
            return ;
        }
        //判断是否有缩略图上传
        if($_FILES['thumb']['error']!=4){
            //说明用户选择了上传文件
            $upload = Factory::M('Upload');
            //初始化相关参数
            $allow = array('image/jpeg','image/png','image/gif','image/jpg');
            $path = UPLOADS_DIR.'thumb';
            //调用uploadAction方法
            $result = $upload->uploadAction($_FILES['thumb'],$allow,$path);
            //判断是否上传成功
            if($result){
                $art['thumb'] = $result;   //将新名字记录到数组
            }else{
                //记录错误的信息并跳转
                $error = Upload::$error;
                $this->jump('index.php?p=Admin&c=Article&a=add',$error);
            }

        }else{
            $art['thumb'] ='default.jpg';
        }

        $artical = Factory::M('ArticleModel');
        $result = $artical->insertArt($art);
        if($result){
            $this->jump('index.php?p=Admin&c=Article&a=index');
        }else{
            $this->jump('index.php?p=Admin&c=Article&a=index','发生未知错误');
        }
    }
    public function editAction(){
        $art_id=$this->escapeData($_GET['art_id']);
        $article = Factory::M('ArticleModel');
        $artInfoById=$article->getArticle($art_id);
        //分配变量

        $this->assign('artInfoById',$artInfoById);
        //获取文章类别信息

        $category = Factory::M('CategoryModel');
        $cateinfo = $category->getCategory();
        $this->assign('cateinfo',$cateinfo);


        $this->display('edit.html');
    }
    public function dealEditAction(){
        $art = $this->getPost();
        $art_id= $this->escapeData($_POST['art_id']);
        if(empty($art['title'])  ||empty($art['content']) ||empty($art['content'])
        ||empty($art['content']) ||empty($art['content']) || empty($art['cate_id']))
        {
            $this->jump('index.php?p=Admin&c=Article&a=edit&art_id='.$art_id,'您填写的信息不完整');
            return ;
        }
        //判断是否有缩略图上传
        if($_FILES['thumb']['error']!=4){
            //说明用户选择了上传文件
            $upload = Factory::M('Upload');
            //初始化相关参数
            $allow = array('image/jpeg','image/png','image/gif','image/jpg');
            $path = UPLOADS_DIR.'thumb';
            //调用uploadAction方法
            $result = $upload->uploadAction($_FILES['thumb'],$allow,$path);
            //判断是否上传成功
            if($result){
                $art['thumb'] = $result;   //将新名字记录到数组
            }else{
                //记录错误的信息并跳转
                $error = Upload::$error;
                $this->jump('index.php?p=Admin&c=Article&a=edit&art_id='.$art_id,$error);
            }

        }else{
            $art['thumb'] = $_POST['thumb_bak'];
        }

        $artical = Factory::M('ArticleModel');
        $result = $artical->updateArticleById($art,$art_id);
        if($result){
            $this->jump('index.php?p=Admin&c=Article&a=index');
        }else{
            $this->jump('index.php?p=Admin&c=Article&a=index','发生未知错误');
        }
    }



    public function delsAction(){
        $art_id = $_POST['art_id'];
        $article = Factory::M('ArticleModel');
        foreach($art_id as $id)
        {
            if(!$article->delArtById($id)){
                $this->jump("index.php?p=Admin&c=Article&a=index",'删除错误');
            return false;
            }
        }
            $this->jump('index.php?p=Admin&c=Article&a=index');
    }
    public function delAction(){
        $id = $this->escapeData($_GET['art_id']);
        $article = Factory::M('ArticleModel');
        if($article->delArtById($id)){
            $this->jump("index.php?p=Admin&c=Article&a=index",'删除错误');
        return false;
        }
        $this->jump('index.php?p=Admin&c=Article&a=index');
    }

    public function recycleAction(){
        $article = Factory::M('ArticleModel');
        $artInfo = $article->getDelArt();
        $this->assign('artInfo',$artInfo);



        $rowsPerPage = $GLOBALS['config']['Page']['rowsPerPage'];
        $maxNum = $GLOBALS['config']['Page']['maxNum'];
        $url = "index.php?p=Admin&c=Article&a=recycle&";
        $rowCount = $article->getDelRowCount(); //获取总记录数
        $page = new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage = $page->getStrPage();
        $this->assign('strPage',$strPage);


        $this->display('recycle.html');
    }

    public function realDelAction(){
        $artical = Factory::M('ArticleModel');
        $art_id = $this->escapeData($_GET['art_id']);
        $result = $artical->realDelById($art_id);
        if($result){
            $this->jump('index.php?p=Admin&c=Article&a=recycle');
        }
        else{
            $this->jump("index.php?p=Admin&c=Article&a=recycle",'删除错误');
        }
    }

    public function recoverAction(){
        $id = $this->escapeData($_GET['art_id']);
        $article = Factory::M('ArticleModel');
        if(!$article->recoverArt($id)){
            $this->jump("index.php?p=Admin&c=Article&a=recycle",'还原错误');
        return false;
        }
        $this->jump('index.php?p=Admin&c=Article&a=recycle');
    }
    public function realDelsAction(){
        $art_id = $_POST['art_id'];
        $article = Factory::M('ArticleModel');
        foreach($art_id as $id)
        {
            if(!$article->realDelById($id)){
                $this->jump("index.php?p=Admin&c=Article&a=recycle",'删除错误');
            return false;
            }
        }
            $this->jump('index.php?p=Admin&c=Article&a=recycle');
    }

}
