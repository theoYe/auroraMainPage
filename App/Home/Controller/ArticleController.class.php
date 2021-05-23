<?php
/**
 * 文章显示控制器
 */
class ArticleController extends PlatformController{
    public function indexAction(){
        $article_m = Factory::M('ArticleModel');
        $art = $article_m->getArticle();
        $this->assign('art',$art);

        // $rowsPerPage = $GLOBALS['config']['Page']['rowsPerPage'];
        $rowsPerPage = 5;
        $maxNum = $GLOBALS['config']['Page']['maxNum'];
        $url = "index.php?p=Home&c=Article&a=index&";
        $rowCount = $article_m->getRowCount(); //获取总记录数
        $page = new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage = $page->getStrPage();
        $this->assign('strPage',$strPage);

        $this->display('allart.html');
    }

    public function showAction(){
        $article_m = Factory::M('ArticleModel');
        $art_id = $this->escapeData($_GET['art_id']);
        $art = $article_m->getArticleById($art_id);
        $this->assign('art',$art);
        $this->display('article.html');
    }
    public function cateAction(){



        $cate_id = $this->escapeData($_GET['c_id']);    
        $article_m = Factory::M('ArticleModel');
        $art=$article_m->getArticleByCate($cate_id);
        $cate_m = Factory::M('CategoryModel');
        $cate = $cate_m->getCategoryById($cate_id);
        $rowsPerPage = 5;
        $maxNum = $GLOBALS['config']['Page']['maxNum'];
        $url = "index.php?p=Home&c=Article&a=cate&c_id=$cate_id&";
        $rowCount = $article_m->getCateRowCount($cate_id); //获取总记录数 
        $page = new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage = $page->getStrPage();
        $this->assign('cate',$cate);
        $this->assign('strPage',$strPage);
        $this->assign('art',$art);
        $this->display('cate_art.html');
        return ;

        
    }
    public function memberAction(){
        $member_id = $this->escapeData($_GET['m_id']);
        $article_m = Factory::M('ArticleModel');
        $member_m= Factory::M('MemberModel');
        $member = $member_m->getMemberById($member_id);
        $art=$article_m->getArticleByAuthor($member_id);
        $rowsPerPage = 5;
        $maxNum = $GLOBALS['config']['Page']['maxNum'];
        $url = "index.php?p=Home&c=Article&a=member&m_id=$member_id&";
        $rowCount = $article_m->getAuthorRowCount($member_id); //获取总记录数
        $page = new Page($rowsPerPage,$rowCount,$maxNum,$url);
        $strPage = $page->getStrPage();
        $this->assign('strPage',$strPage);
        $this->assign('art',$art);
        $this->assign('member',$member);
        $this->display('member_art.html');

        return ;
    }


}
