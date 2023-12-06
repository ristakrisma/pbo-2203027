<?php

namespace App\Models;

use App\Core\Model;

class Makeup extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_makeup";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $kategori = $_POST['kategori'];
            $nama = $_POST['nama'];
            $merk = $_POST['merk'];
            $stok = $_POST['stok'];

            $sql = "INSERT INTO tb_makeup
            SET kategori=:kategori, nama=:nama, merk=:merk, stok=:stok";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":kategori", $kategori);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":merk", $merk);
            $stmt->bindParam(":stok", $stok);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_makeup WHERE makeup_id=:makeup_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":makeup_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $kategori = $_POST['kategori'];
            $nama = $_POST['nama'];
            $merk = $_POST['merk'];
            $stok = $_POST['stok'];
            $makeup_id = $_POST['makeup_id'];

            
                  $sql = "UPDATE tb_makeup
                   SET kategori=:kategori, nama=:nama, merk=:merk, stok=:stok
                  WHERE makeup_id=:makeup_id";
           

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":kategori", $kategori);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":merk", $merk);
            $stmt->bindParam(":stok", $stok);
            $stmt->bindParam(":makeup_id", $makeup_id);


            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_makeup WHERE makeup_id=:makeup_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":makeup_id", $id);
            $stmt->execute();
      }
}
