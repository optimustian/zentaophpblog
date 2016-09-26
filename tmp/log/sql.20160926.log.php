<?php
 die();
?>
20160926 10:21:06: index
  SELECT * FROM blog_cetegory WHERE ename  = 'all'
  SELECT count(*) count FROM blog_article
  SELECT * FROM blog_cetegory WHERE parent  = '0'
  SELECT * FROM blog_cetegory WHERE parent  = '1'
  SELECT * FROM blog_cetegory WHERE parent  = '4'
  SELECT a.*, c.cname typename FROM blog_article a LEFT JOIN blog_cetegory c ON a.childtype = c.ename  WHERE a.dele  = '0' ORDER BY a.`createdate` desc   limit 0, 5 
  SELECT * FROM blog_cetegory WHERE ename  = 'all'

20160926 10:22:57: index
  SELECT * FROM blog_cetegory WHERE ename  = 'all'
  SELECT count(*) count FROM blog_article
  SELECT * FROM blog_cetegory WHERE parent  = '0'
  SELECT * FROM blog_cetegory WHERE parent  = '1'
  SELECT * FROM blog_cetegory WHERE parent  = '4'
  SELECT a.*, c.cname typename FROM blog_article a LEFT JOIN blog_cetegory c ON a.childtype = c.ename  WHERE a.dele  = '0' ORDER BY a.`createdate` desc   limit 0, 5 
  SELECT * FROM blog_cetegory WHERE ename  = 'all'

20160926 10:23:17: article-dateil-19
  UPDATE blog_article as a SET  a.view=a.view+1 WHERE id  = '19'
  SELECT * FROM blog_cetegory WHERE parent  = '0'
  SELECT * FROM blog_cetegory WHERE parent  = '1'
  SELECT * FROM blog_cetegory WHERE parent  = '4'
  SELECT a.*, c.cname typename FROM blog_article a LEFT JOIN blog_cetegory c ON a.childtype = c.ename  WHERE a.id  = '19' AND  a.dele  = '0'
  SELECT * FROM blog_cetegory WHERE ename  = 'wxdev'
  SELECT * FROM blog_cetegory WHERE id  = '1'

20160926 10:23:24: 
  SELECT * FROM blog_cetegory WHERE ename  = 'all'
  SELECT count(*) count FROM blog_article
  SELECT * FROM blog_cetegory WHERE parent  = '0'
  SELECT * FROM blog_cetegory WHERE parent  = '1'
  SELECT * FROM blog_cetegory WHERE parent  = '4'
  SELECT a.*, c.cname typename FROM blog_article a LEFT JOIN blog_cetegory c ON a.childtype = c.ename  WHERE a.dele  = '0' ORDER BY a.`createdate` desc   limit 0, 5 
  SELECT * FROM blog_cetegory WHERE ename  = 'all'

20160926 10:25:57: 
  SELECT * FROM blog_cetegory WHERE ename  = 'all'
  SELECT count(*) count FROM blog_article
  SELECT * FROM blog_cetegory WHERE parent  = '0'
  SELECT * FROM blog_cetegory WHERE parent  = '1'
  SELECT * FROM blog_cetegory WHERE parent  = '4'
  SELECT a.*, c.cname typename FROM blog_article a LEFT JOIN blog_cetegory c ON a.childtype = c.ename  WHERE a.dele  = '0' ORDER BY a.`createdate` desc   limit 0, 5 
  SELECT * FROM blog_cetegory WHERE ename  = 'all'

