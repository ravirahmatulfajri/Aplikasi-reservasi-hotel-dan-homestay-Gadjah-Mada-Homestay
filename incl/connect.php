<?
/*
	halaman koneksi
	mbikin koneksi PHP ma DATABASE
*/

Class Hub {

	var $hasil;
	var $kueri;

	function Hub() {
		$_hub = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("tidak mau terhubung");
		mysql_select_db(DB_NAME, $_hub) or die("tetap tidak mau terhubung");
		return $_hub;
	}

	function sql($sql) {
		$arr = explode(" ", $sql);
		$this->hasil = mysql_query($sql);
		//if(strtolower($arr[0]) == "delete") {
		//	$this->optimis($arr[2]);
		//}
		return $this->hasil;
	}

	function last_id() {
		return mysql_insert_id();
	}

	function optimis($table) {
		$qu = "SELECT MAX(id_inap)+1 as maks FROM " . $table;
		$max = mysql_fetch_assoc(mysql_query($qu));
		mysql_query("ALTER TABLE " . $table . " AUTO_INCREMENT = " . $max[maks]);
		mysql_query("OPTIMIZE TABLE " . $table);
	}

	function getJml() {
		return mysql_num_rows($this->hasil);
	}

	function affected_rows() {
		return mysql_affected_rows();
	}

	function field_name() {
		$jml = $this->num_field();
		for($i=0;$i<$jml;$i++) {
			$arr_field[] = mysql_field_name($this->hasil, $i);
		}
		return $arr_field;
	}

	function num_field() {
		return mysql_num_fields($this->hasil);
	}

	function getOne() {
		return mysql_fetch_assoc($this->hasil);
	}

	function getAll() {
		while($baris = mysql_fetch_assoc($this->hasil)) {
			$m[] = $baris;
		}
		$m["JML_ROW"] = $this->getJml();
		return $m;
	}

	function getTempAll() {
		$field = $this->field_name();
		$jml = sizeof($field);

		while($baris = mysql_fetch_assoc($this->hasil)) {
			for($i=0;$i<$jml;$i++) {
				$arr[$field[$i]][] = $baris[$field[$i]];
			}
		}
		return $arr;
	}

	function tutup() {
		return mysql_free_result($this->hasil);
	}

	public function tampil($id = null){
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_pesan";
		if($id !=null){
			$sql .= " WHERE id_pesan = $id";

		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 
}

?>