<?php

class set {
  
    public function getSet($deg) {

        $degree=preg_replace("/[^0-9,.]/", "", $deg);
    
        $set="";
    
        if($degree<=9)
        {$set="setA";}
        elseif($degree>9 && $degree<=19)
        {$set="setB";}
        elseif($degree>19 && $degree<=29)
        {$set="setC";}
        else{}
    
        return $set;
    
      }

}

class generatedb extends CI_Model
{
/* we will use the function getUsers */
  function get_part_one($birthday_number)
  {

    /* all the queries relating to the data we want to retrieve will go in here. */
    $this->db->where(array('card_number'=>$birthday_number));

    $this->db->select('*');

    $q = $this->db->get("part_one_life_path");

    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }

  }

  function get_reading($month,$day,$year)
  {

    /* all the queries relating to the data we want to retrieve will go in here. */
    $this->db->where(array('Month'=>$month,'Day'=>$day,'Year'=>$year));
    $this->db->select('*');
    $q = $this->db->get("reading");

    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }

  }


  function get_major_suns($suns)
  {
    $sql="SELECT * FROM major_arcana_guide INNER JOIN suns WHERE suns.major_arcana=major_arcana_guide.major_arcana and major_arcana_guide.sign='".$suns."' ";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  function get_minor_sund($deg, $sund)
  { 

    $check = new set;
    $set = $check->getSet($deg);    
    $sql="SELECT * FROM minor_arcana_guide_old INNER JOIN sund WHERE sund.minor_arcana=minor_arcana_guide_old.minor_arcana and minor_arcana_guide_old.sign='".$sund."' and minor_arcana_guide_old.degree='".$set."' ";
    $query = $this->db->query($sql);
    return $query->result_array();  

  }


  function get_major_mercs($mercs)
  {
    $sql="SELECT * FROM major_arcana_guide INNER JOIN mercs WHERE mercs.major_arcana=major_arcana_guide.major_arcana and major_arcana_guide.sign='".$mercs."' ";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  function get_minor_mercd($deg, $mercd)
  {

    $check = new set;
    $set = $check->getSet($deg); 
    $sql="SELECT * FROM minor_arcana_guide_old INNER JOIN mercd WHERE mercd.minor_arcana=minor_arcana_guide_old.minor_arcana and minor_arcana_guide_old.sign='".$mercd."' and minor_arcana_guide_old.degree='".$set."' ";
    $query = $this->db->query($sql);
    return $query->result_array();
  }


  function get_major_vens($vens)
  {
    $sql="SELECT * FROM major_arcana_guide INNER JOIN vens WHERE vens.major_arcana=major_arcana_guide.major_arcana and major_arcana_guide.sign='".$vens."' ";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  function get_minor_vend($deg, $vend)
  {

    $check = new set;
    $set = $check->getSet($deg);    
    $sql="SELECT * FROM minor_arcana_guide_old INNER JOIN vend WHERE vend.minor_arcana=minor_arcana_guide_old.minor_arcana and minor_arcana_guide_old.sign='".$vend."' and minor_arcana_guide_old.degree='".$set."' ";
    $query = $this->db->query($sql);
    return $query->result_array();

  }

  function get_major_marss($marss)
  {
    $sql="SELECT * FROM major_arcana_guide INNER JOIN marss WHERE marss.major_arcana=major_arcana_guide.major_arcana and major_arcana_guide.sign='".$marss."' ";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  function get_minor_marsd($deg, $marsd)
  { 
    $check = new set;
    $set = $check->getSet($deg);      
    $sql="SELECT * FROM minor_arcana_guide_old INNER JOIN marsd WHERE marsd.minor_arcana=minor_arcana_guide_old.minor_arcana and minor_arcana_guide_old.sign='".$marsd."' and minor_arcana_guide_old.degree='".$set."'  ";
    $query = $this->db->query($sql);
    return $query->result_array();
  }


  function get_major_saturns($saturns)
  {

    $sql="SELECT * FROM major_arcana_guide INNER JOIN saturns WHERE saturns.major_arcana=major_arcana_guide.major_arcana and major_arcana_guide.sign='".$saturns."' ";
    $query = $this->db->query($sql);
    return $query->result_array();

  }

  function get_minor_saturnd($deg, $saturnd)
  {
    $check = new set;
    $set = $check->getSet($deg);      
    $sql="SELECT * FROM minor_arcana_guide_old INNER JOIN saturnd WHERE saturnd.minor_arcana=minor_arcana_guide_old.minor_arcana and minor_arcana_guide_old.sign='".$saturnd."' and minor_arcana_guide_old.degree='".$set."'  ";
    $query = $this->db->query($sql);
    return $query->result_array();

  }

  function get_major_jupiters($jupiters)
  {

    $sql="SELECT * FROM major_arcana_guide INNER JOIN jupiters WHERE jupiters.major_arcana=major_arcana_guide.major_arcana and major_arcana_guide.sign='".$jupiters."' ";
    $query = $this->db->query($sql);
    return $query->result_array();

  }

  function get_minor_jupiterd($deg, $jupiterd)
  {

    $check = new set;
    $set = $check->getSet($deg);      
    $sql="SELECT * FROM minor_arcana_guide_old INNER JOIN jupiterd WHERE jupiterd.minor_arcana=minor_arcana_guide_old.minor_arcana and minor_arcana_guide_old.sign='".$jupiterd."' and minor_arcana_guide_old.degree='".$set."' ";
    $query = $this->db->query($sql);
    return $query->result_array();

  }

  function get_part_three($deg,$sign)
  {

    //types - key8

    $degree=preg_replace("/[^0-9,.]/", "", $deg);

    $set="";
    if($degree<=9)
    {$set="setA";}
    elseif($degree>9 && $degree<=19)
    {$set="setB";}
    elseif($degree>19 && $degree<=29)
    {$set="setC";}
    else{}

      $sql="SELECT * FROM minor_arcana_guide_old  WHERE minor_arcana_guide_old.sign='".$sign."' and minor_arcana_guide_old.degree='".$set."' ";

      $query = $this->db->query($sql);

      return   $query->result_array();

  }

  function check_year()
  {
    $sql="SELECT * FROM reading WHERE Month=3 and Year = 1941";
    $query = $this->db->query($sql);

    echo count($query->result_array());


      for($x=1941; $x<=2010; $x++)
      {

      }

  }

 function get_soul_urge($vowel_score)
 {
    $sql="SELECT * FROM soul_urge WHERE score = '".$vowel_score."' ";

    $query = $this->db->query($sql);

    return $query->result_array();
 }

 function get_personality($consonant_score)
 {
    $sql="SELECT * FROM personality_number WHERE score = '".$consonant_score."' ";

    $query = $this->db->query($sql);

    return $query->result_array();
 }

 function get_compatibility_key($signOne, $signTwo)
  {

    $sql="SELECT * FROM compatibility_key WHERE sign_one = '".$signOne."' AND sign_two = '".$signTwo."' ";

    $query = $this->db->query($sql);

    return $query->result_array();

  }

  function get_key_computation($key_type, $placement, $key_name) {
 
    $sql="SELECT * FROM key_computation WHERE key_type = '".$key_type."' AND placement = '".$placement."' AND key_name = '".$key_name."' ";

    $query = $this->db->query($sql);

    return $query->result_array();

  }

  function get_sign_description($sign) {

    $sql="SELECT * FROM sign_one_description WHERE sign = '".$sign."' ";

    $query = $this->db->query($sql);

    return $query->result_array();

  }

}
