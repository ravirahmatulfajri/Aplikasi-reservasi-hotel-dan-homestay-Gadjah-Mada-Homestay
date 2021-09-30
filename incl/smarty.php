<?
include_once LIB_DIR . "smarty/libs/Smarty.class.php";
/*$mn2 = intval(strip_tags($_GET['d']));
$mn3 = intval(strip_tags($_GET['t']));
$mn4 = intval(strip_tags($_GET['e']));

if (!$mn2) $mn2 = 0;
if (!$mn3) $mn3 = 0;
if (!$mn4) $mn4 = 0;
*/
Class Template extends Smarty {
	var $idpoll;
	var $question;
	
	function Template() {
		$this->Smarty();
		$this->template_dir = TPL_DEF_DIR;
		$this->compile_dir = TPL_COMPILE_DIR;
		$this->config_dir = TPL_CONFIG_DIR;
		$this->cache_dir = TPL_CACHE_DIR;
		$this->caching = 0;
		$this->debugging = 0;
		$this->addVar("web_title", "Digital Library");
		$this->register_block('dynamic', 'smarty_block_dynamic', false);

		//reg fungsi tanggal
		$this->register_function("atur_waktu", "tanggalIndo");	
		$this->register_function("potong", "sampaititik2");			
		$this->register_function("strips", "streep");
		$this->register_function("getImg", "getImagesizes");	

		if ($_SESSION['dl_state'] == "admin"){
			$this->addVar("STATUSUSER", "Administrator");
			$this->addVar("IDUSER", $_SESSION['dl_id_user']);
		} else {
			$this->addVar("STATUSUSER", "User");
			$this->addVar("IDUSER", $_SESSION['dl_id_user']);
		}
	}

	function addVar($a, $b) {
		return $this->assign($a, $b);
	}

	function addLink($var, $att = array()) {
		$att[title] = empty($att[title]) ? $att[name] : $att[title];

		return $this->addVar($var, '<a href="'.$att[href].'" title="'.$att[title].'" class="'.$att[style].'">'.$att[name].'</a>');
	}

	function addVars($a, $b) {
		return $this->append($a, $b);
	}

	function getVar($a) {
		return $this->get_template_vars($a);
	}

	function getVars() {
		return $this->get_template_vars();
	}

	function getCon(){
		$conn = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die ("Could not connect to database");
		mysql_select_db(DB_NAME,$conn);
	}
	
	function tanggalIndo(){
		$_waktu = date("Y-m-d");
		
		$_tahun = substr($_waktu,0,4);
		$_bulan = substr($_waktu,5,2);
		$_tanggal = substr($_waktu,8,2);
		if ($_waktu != "0000-00-00"){
			$_hari_en =date("D", mktime(0,0,0,$_bulan, $_tanggal, $_tahun));
			$hari_en = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
			$hari_id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu");
			$bulan_en = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");	
			$bulan_id = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Des");
			$_hari_id = str_replace($hari_en, $hari_id, $_hari_en);
			$_bulan_id = str_replace($bulan_en, $bulan_id, $_bulan);
			$_tgl = $_hari_id.", ".$_tanggal." ".$_bulan_id." ".$_tahun;
			$tglX = $_tgl;
		} else {
			$tglX = "-";
		}
		$_jam = date("H:i");
		$tglX .= "&nbsp&nbsp;|&nbsp;&nbsp;".$_jam;
		$this->addVar("TGLSISTEM", $tglX);
	}
	
	function getTanggala($nama_select){
		$gtgl = date("d");
		$tgls = "<select name=\"".$nama_select."\">";
		
		for($tgl=1;$tgl<=31;$tgl++){
			if ($tgl < 10) $tgl = "".$tgl;
			if ($tgl== $gtgl) {
				$selectedt = " selected=\"selected\"";
			}else { $selectedt = "";}
			
			$tgls .= "<option value=\"".$tgl."\"$selectedt>$tgl</option>";
		}
		
		$tgls .= "</select>";
		
		return $tgls;
	}
	
	function blncombo($nama_select,$buls){	
		$bul = $buls;
		$bulan_id = array("","Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober","November", "Desember");
		$combo.="<select name=\"".$nama_select."\" class=\"combo\" size=\"1\">";	
		for($i=1; $i<=12; $i++){
			if ($i == $bul){
				$sel = " selected";
			} else {
				$sel = "";
			}
			if($i<=9){
				$nol = "";
			}else{
			    $nol = "";
			}
			$combo.="<option value=\"".$nol.$i."\"".$sel.">".$bulan_id[$i]."</option>";
		}
		$combo.="</select>";
		return $combo;
	}
	
	function getTahun($nama_select){
		$gyear = date("Y");
		$years = "<select name=\"".$nama_select."\">";
		
		for($tgl=$gyear;$tgl<=($gyear+1);$tgl++){			
			if ($tgl== $gyear) {
				$selectedt = " selected=\"selected\"";
			}else { $selectedt = "";}
			
			$years .= "<option value=\"".$tgl."\"$selectedt>$tgl</option>";
		}
		
		$years .= "</select>";
		
		return $years;
	}
}
?>