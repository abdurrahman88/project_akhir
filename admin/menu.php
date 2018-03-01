<?php
$url = pathinfo(basename($_SERVER['SCRIPT_NAME']), PATHINFO_FILENAME);
?>
                  <li <?= ($url == 'bagian_admin') ? 'class="active"':''?>>
                    <a href="bagian_admin.php">
                      <i class="fa fa-home"></i> Home
                    </a>
                  </li>
                  <li <?= ($url == 'user' || $url == 'user_edit' || $url == 'tambah_user') ? 'class="active"':''?>>
                    <a href="user.php">
                      <i class="fa fa-user"></i>User
                    </a>
                  </li>
                  <li class="treeview" <?= ($url == 'kategori' || $url == 'edit_kategori' || $url == 'tambah_kategori' || $url == 'artikel' || $url == 'edit_artikel' || $url == 'tambah_artikel' ) ? 'class':''?>>
                    <a>
                      <i class="fa fa-edit"></i> 
                      Blog   
                      <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="Kategori.php">Kategori</a></li>
                      <li><a href="artikel.php">Artikel</a></li>
                    </ul>
                  </li>
                   <li <?= ($url == 'komentar') ? 'class="active"':''?>>
                    <a href="komentar.php">
                      <i class="fa fa-comment-o"></i>Komentar
                    </a>
                  </li>