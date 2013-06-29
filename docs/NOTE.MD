
NOTE
===========

Record the problems in the practice process.

Error List
===========

# [twig-error]
  When I use this code:
  // {% render 'BloggerBlogBundle:Comment:new' with { 'blog_id': blog.id } %} //
  // Unexpected token "name" of value "with" ("end of statement block" expected) 
     in BloggerBlogBundle:Blog:show.html.twig at line 24 //
  
  - Solumtion:
  In symfony2.2, it's changed.
  The render tag signature and arguments changed.
  https://github.com/symfony/symfony/blob/master/UPGRADE-2.2.md
  StackOverflow topic
  http://stackoverflow.com/questions/8289513/how-to-load-a-controller-function-and-render-it-in-a-twig-tag-using-symfony2?rq=1
