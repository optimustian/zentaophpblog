<?php
/**
 * The control file of index module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
class article extends control
{
    /**
     * The construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The index page.
     * 
     * @access public
     * @return void
     */
    public function dateil($id=0)
    {
        $this->dao->update('blog_article as a')->set("a.view=a.view+1")->where('id')->eq($id)->exec(false);
        $this->view->category   = $this->loadModel('api')->getBlogCategory();
        $article                = $this->loadModel('api')->getArticleByID($id);
        $this->view->article    = $article;
        $this->view->type       = $this->loadModel('api')->getBlogCategoryByename($article->childtype);
        $this->view->title      ='首页-'.$article->typename;
        $this->display();
    }
}
