<?php
/**
 * The model file of blog module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<?php
class apiModel extends model
{
    public function getBlogCategory(){
        $category = new stdClass();
        $parent=$this->dao->select('*') ->from('blog_cetegory')->where('parent')->eq('0')->fetchAll();
        foreach ($parent as $key => $value) {
            $child=$this->dao->select('*') ->from('blog_cetegory')->where('parent')->eq($value->id)->fetchAll();
            $category->$key->parent=$value;
            $category->$key->child=$child;
        }
        return $category;
    }
     public function getBlogCategoryByename($ename){
        $cate=$this->dao->select('*') ->from('blog_cetegory')->where('ename')->eq($ename)->fetch();
        if(!empty($cate->parent)){
            $cate2=$this->dao->select('*') ->from('blog_cetegory')->where('id')->eq($cate->parent)->fetch();
        }
        if($ename=='all')  $cate->ename='all';
        $cate->parentename=$cate2->ename;
        $cate->parentcname=$cate2->cname;
        return $cate;
    }

    public function getBlogArticle($type,$pager){
        if($type=='all'){
            return $this->dao->select('a.*, c.cname typename') 
                ->from('blog_article a')
                ->leftJoin('blog_cetegory c')
                ->on('a.childtype = c.ename')
                ->where('a.dele')->eq('0')
                ->orderBy("a.createdate desc")
                ->page($pager)
                ->fetchAll();
        }
        $category=$this->dao->select('*') ->from('blog_cetegory')->where('ename')->eq($type)->fetch();
        $devtype ='childtype';
        if(empty($category->parent))  $devtype ='parenttype';
        $article=$this->dao->select('a.*, c.cname typename') 
                ->from('blog_article a')
                ->leftJoin('blog_cetegory c')
                ->on('a.childtype = c.ename')
                ->where('a.dele')->eq('0')
                ->andWhere('a.'.$devtype)->eq($type)
                ->orderBy("a.createdate desc")
                ->page($pager)
                ->fetchAll();
        return $article;
    }

    public function getArticleCount($type){
         $category=$this->dao->select('*') ->from('blog_cetegory')->where('ename')->eq($type)->fetch();
         if(empty($category->parent))
          return $this->dao->select('count(*) count')
                        ->from('blog_article')
                        ->beginIF($type != 'all')
                        ->where('parenttype')
                        ->eq($type)->fi()
                        ->fetch();
        return $this->dao->select('count(*) count')
                        ->from('blog_article')
                        ->beginIF($type != 'all')
                        ->where('childtype')
                        ->eq($type)->fi()
                        ->fetch();
    }

     public function getArticleByID($id){
        return $this->dao->select('a.*, c.cname typename') 
                ->from('blog_article a')
                ->leftJoin('blog_cetegory c')
                ->on('a.childtype = c.ename')
                ->where('a.id')->eq($id)
                ->andWhere('a.dele')->eq('0')
                ->fetch();
    }
}
