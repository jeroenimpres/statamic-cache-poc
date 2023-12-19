---
id: a0c97c7d-e25b-45bc-9824-dead1bbef7f5
blueprint: page
title: "I'm cool"
updated_by: 80eea560-064d-407d-b251-cbf022d01c34
updated_at: 1703025362
---
Just chilling, caching a bit. 

{{ collection from="*" paginate="3" as="posts" }}
 
   {{ if no_results }}
       <p>Aww, there are no results.</p>
   {{ /if }}

   {{ posts }}
       <article>
           {{ title }}
       </article>
   {{ /posts }}
 
   {{ paginate }}
        <a href="{{ prev_page }}">⬅ Previous</a>
 
 {{ current_page }} of {{ total_pages }} pages
        (There are {{ total_items }} posts)
 
   <a href="{{ next_page }}">Next ➡</a>
 {{ /paginate }}
 
{{ /collection }}