<table class="table-bordered table-responsive ">
    <thead>
    <th>#</th>
    <th>Name</th>
    <th>Content</th>
</thead>
<tbody>
    <?php
    $i=1;
    foreach ($data as $row) {
        ?><tr>
            
        <td><?php echo $i++?></td>
        <td><?php echo $row->news_name;?></td>
        <td><?php echo $row->news_content;?></td></tr>
                   
        
       
    <?php } ?>
</tbody> 
</table>

