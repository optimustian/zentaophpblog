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
class index extends control
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
    public function home($type='all',$pageID = 1)
    {
        $recTotal = $this->loadModel('api')->getArticleCount($type);;
        $recPerPage = 5;
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal->count, $recPerPage, $pageID);
        $this->view->category   = $this->loadModel('api')->getBlogCategory();
        $this->view->article    = $this->loadModel('api')->getBlogArticle($type,$pager);
        $this->view->pager      = $pager;
        $this->view->type       = $this->loadModel('api')->getBlogCategoryByename($type);
        $this->view->title      ='首页-山顶洞洞人';
        $this->display();
    }
}
