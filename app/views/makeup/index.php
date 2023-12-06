<h2>MAKE UP</h2>

<a href="<?php echo URL; ?>/makeup/input" class="btn">Data Make up</a>

<table>
      <tr>
            <th>NO</th>
            <th>KATEGORI</th>
            <th>NAMA</th>
            <th>MERK</th>
            <th>STOK</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['kategori']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['merk']; ?></td>
                  <td><?php echo $row['stok']; ?></td>
                  <td><a href="<?php echo URL; ?>/makeup/edit/<?php echo $row['makeup_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/makeup/delete/<?php echo $row['makeup_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>