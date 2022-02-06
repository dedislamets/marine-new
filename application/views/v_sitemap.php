<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>

  <?php foreach($artikel as $data) { ?>
  <url>
     <loc><?php echo base_url()."ship/".$data->id."/". str_replace(" ","-", $data->title).".html" ?></loc>
     <priority>0.5</priority>
     <lastmod>
         <?php 
            $date = date_create($data->tgl);
            echo date_format($date, 'Y-m-d'); 
        ?>
        </lastmod>
  </url>
  <?php } ?>
 
</urlset>