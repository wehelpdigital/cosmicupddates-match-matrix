<?php   if( !defined('BASEPATH')) exit ('No direct script access is allowed');

require('fpdf/fpdf.php');
 
function hex2dec($couleur = "#000000"){

    $R = substr($couleur, 1, 2);

    $rouge = hexdec($R);

    $V = substr($couleur, 3, 2);

    $vert = hexdec($V);

    $B = substr($couleur, 5, 2);

    $bleu = hexdec($B);

    $tbl_couleur = array();

    $tbl_couleur['R']=$rouge;

    $tbl_couleur['V']=$vert;

    $tbl_couleur['B']=$bleu;

    return $tbl_couleur;

}



//conversion pixel -> millimeter at 72 dpi

function px2mm($px){

    return $px*25.4/72;

}



function txtentities($html){

    $trans = get_html_translation_table(HTML_ENTITIES);

    $trans = array_flip($trans);

    return strtr($html, $trans);

}



class Myfpdf extends Fpdf {

	protected $B;

	protected $I;

	protected $U;

	protected $HREF;

	protected $fontList;

	protected $issetfont;

	protected $issetcolor;



	const DPI = 96;

	const MM_IN_INCH = 25.4;

	const A4_HEIGHT = 210;

	const A4_WIDTH = 297;

	// tweak these values (in pixels)

	const MAX_WIDTH = 500;

	const MAX_HEIGHT = 800;



	function __construct($orientation='P', $unit='mm', $format='A4')

	{

	    //Call parent constructor

	    parent::__construct($orientation,$unit,$format);

	    //Initialization

	    $this->B=0;

	    $this->I=0;

	    $this->U=0;

	    $this->HREF='';

	    $this->fontlist=array('arial', 'times', 'courier', 'helvetica', 'symbol');

	    $this->issetfont=false;

	    $this->issetcolor=false;

      $this->tableborder=0;

      $this->tdbegin=false;

      $this->tdwidth=0;

      $this->tdheight=0;

      $this->tdalign="L";

      $this->tdbgcolor=false;

	}







		function pixelsToMM($val)

		{

	        return $val * Myfpdf::MM_IN_INCH / Myfpdf::DPI;

	  }



    function resizeToFit($imgFilename)

		{

        list($width, $height) = getimagesize($imgFilename);

        $widthScale = Myfpdf::MAX_WIDTH / $width;

        $heightScale = Myfpdf::MAX_HEIGHT / $height;

        $scale = min($widthScale, $heightScale);

        return array(

            round($this->pixelsToMM($scale * $width)),

            round($this->pixelsToMM($scale * $height))

        );

    }



    function centreImage($img, $centerX=true, $centerY=true, $link=null)

	{

		if($centerX && $centerY)

		{

			list($width, $height) = $this->resizeToFit($img);

		}	

		else

		{

			list($width, $height) = getimagesize($img);

			$width = round($this->pixelsToMM($width));

			$height = round($this->pixelsToMM($height));

		}

        

        // you will probably want to swap the width/height

        // around depending on the page's orientation

		$x = $centerX ? (Myfpdf::A4_HEIGHT - $width) / 2 : null;

		$y = $centerY ? (Myfpdf::A4_WIDTH - $height) / 2 : null;

		

        $this->Image(

            $img, 

			$x,

            $y,

            $width,

            $height,

			null,

			$link

      );

    }



    function WriteHTML($html)
{
    $html=strip_tags($html,"<b><u><i><a><img><p><br><strong><em><font><tr><blockquote><hr><td><tr><table><sup>"); //remove all unsupported tags
    $html=str_replace("\n",'',$html); //replace carriage returns with spaces
    $html=str_replace("\t",'',$html); //replace carriage returns with spaces
    $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE); //explode the string
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            //Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            elseif($this->tdbegin) {
                if(trim($e)!='' && $e!="&nbsp;") {
                    $this->Cell($this->tdwidth,$this->tdheight,$e,$this->tableborder,'',$this->tdalign,$this->tdbgcolor);
                }
                elseif($e=="&nbsp;") {
                    $this->Cell($this->tdwidth,$this->tdheight,'',$this->tableborder,'',$this->tdalign,$this->tdbgcolor);
                }
            }
            else
                $this->Write(5,stripslashes(txtentities($e)));
        }
        else
        {
            //Tag
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                //Extract attributes
                $a2=explode(' ',$e);
                $tag=strtoupper(array_shift($a2));
                $attr=array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])]=$a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

		function OpenTag($tag, $attr)

		{

		    //Opening tag

		    switch($tag){



          case 'TABLE': // TABLE-BEGIN

          if( !empty($attr['BORDER']) ) $this->tableborder=$attr['BORDER'];
          else $this->tableborder=0;
          break;
        case 'TR': //TR-BEGIN

            break;

        case 'TD': // TD-BEGIN

            if( !empty($attr['WIDTH']) ) $this->tdwidth=($attr['WIDTH']/4);

            else $this->tdwidth=40; // Set to your own width if you need bigger fixed cells

            if( !empty($attr['HEIGHT']) ) $this->tdheight=($attr['HEIGHT']/6);

            else $this->tdheight=6; // Set to your own height if you need bigger fixed cells

            if( !empty($attr['ALIGN']) ) {

                $align=$attr['ALIGN'];

                if($align=='LEFT') $this->tdalign='L';

                if($align=='CENTER') $this->tdalign='C';

                if($align=='RIGHT') $this->tdalign='R';

            }





		        case 'STRONG':

		            $this->SetStyle('B',true);

		            break;

		        case 'EM':

		            $this->SetStyle('I',true);

		            break;

		        case 'B':

		        case 'I':

		        case 'U':

		            $this->SetStyle($tag,true);

		            break;

		        case 'A':

		            $this->HREF=$attr['HREF'];

		            break;

		        case 'IMG':

		            if(isset($attr['SRC']) && (isset($attr['WIDTH']) || isset($attr['HEIGHT']))) {

		                if(!isset($attr['WIDTH']))

		                    $attr['WIDTH'] = 0;

		                if(!isset($attr['HEIGHT']))

		                    $attr['HEIGHT'] = 0;

		                $this->Image($attr['SRC'], $this->GetX(), $this->GetY(), px2mm($attr['WIDTH']), px2mm($attr['HEIGHT']));

		            }

		            break;

		        case 'TR':

		        case 'BLOCKQUOTE':

		        case 'BR':

		            $this->Ln(5);

		            break;

		        case 'P':

		            $this->Ln(10);

		            break;

		        case 'FONT':

		            if (isset($attr['COLOR']) && $attr['COLOR']!='') {

		                $coul=hex2dec($attr['COLOR']);

		                $this->SetTextColor($coul['R'],$coul['V'],$coul['B']);

		                $this->issetcolor=true;

		            }

		            if (isset($attr['FACE']) && in_array(strtolower($attr['FACE']), $this->fontlist)) {

		                $this->SetFont(strtolower($attr['FACE']));

		                $this->issetfont=true;

		            }

		            break;

		    }

		}



		function CloseTag($tag)

		{



		    //Closing tag

        if($tag=='TD') { // TD-END

        $this->tdbegin=false;

        $this->tdwidth=0;

        $this->tdheight=0;

        $this->tdalign="L";

        $this->tdbgcolor=false;

        }

        if($tag=='TR') { // TR-END

            $this->Ln();

        }

        if($tag=='TABLE') { // TABLE-END

            $this->tableborder=0;

        }



		    if($tag=='STRONG')

		        $tag='B';

		    if($tag=='EM')

		        $tag='I';

		    if($tag=='B' || $tag=='I' || $tag=='U')

		        $this->SetStyle($tag,false);

		    if($tag=='A')

		        $this->HREF='';

		    if($tag=='FONT'){

		        if ($this->issetcolor==true) {

		            $this->SetTextColor(0);

		        }

		        if ($this->issetfont) {

		            $this->SetFont('arial');

		            $this->issetfont=false;

		        }

		    }

		}



		function SetStyle($tag, $enable)

		{

		    //Modify style and select corresponding font

		    $this->$tag+=($enable ? 1 : -1);

		    $style='';

		    foreach(array('B','I','U') as $s)

		    {

		        if($this->$s>0)

		            $style.=$s;

		    }

		    $this->SetFont('',$style);

		}



		function PutLink($URL, $txt)

		{

		    //Put a hyperlink

		    $this->SetTextColor(0,0,255);

		    $this->SetStyle('U',true);

		    $this->Write(5,$txt,$URL);

		    $this->SetStyle('U',false);

		    $this->SetTextColor(0);

		}



    public function floatingImage($imgPath, $height)

    {

        list($w, $h) = getimagesize($imgPath);

        $ratio = $w / $h;

        $imgWidth = $height * $ratio;



        $this->Image($imgPath, $this->GetX(), $this->GetY());

        $this->x += $imgWidth;

    }





    function Footer()

    {

        // Go to 1.5 cm from bottom

        $this->SetY(-15);

        // Select Arial italic 8

        $this->SetFont('Arial','B',12);

        // Print centered page number

        $this->Cell(0,10,$this->PageNo(),0,0,'C');

    }



		//Content Functions Here



		function subhead($text,$size,$format)

		{

			$this->SetFont('Arial',$format,$size);

			$this->MultiCell(0,20,$text,0,'C',false);



    }



		function mainhead($text,$size,$format,$lineheight)

		{

			$this->SetFont('Arial',$format,$size);

      $this->MultiCell(0,$lineheight,$text,0,'C',false);

		}



		function normal_center($text,$size,$format,$lineheight)

		{



			$this->SetFont('Arial',$format,$size);

      $this->MultiCell(0,$lineheight,$text,0,'C',false);



		}



    function normal_left($text,$size,$format,$lineheight,$indent=0)

		{

			$this->SetFont('Arial',$format,$size);

      $this->MultiCell(0,$lineheight,$text,0,'FJ',false,$indent);

    }



    function writethis($text,$size,$format,$lineheight)

		{



			$this->SetFont('Arial',$format,$size);

      $this->write($lineheight,$text);



		}



    function card($path)

    {

      $imgPath = base_url()."public/img/".$path;

			$this->ln(5);

			$this->SetX(20);

			$height = 0;

			$this->floatingImage($imgPath, $height);

			$this->SetX(65);

    }



    function right_title($content)

    {

      $this->SetX(65);

			$this->SetFont('Arial', 'B', 14);

			$this->writeHTML("<b>".$content."</b>");

    }



    function right_content($content, $x=65, $style='', $alignment='FJ')

    {



      $this->SetX($x);

      $this->SetFont('Arial',$style,14);

      $this->MultiCell(0,10,"\n".$content,0,$alignment,false);



    }



    function key_right_content($content, $x=65, $style='', $alignment='FJ')

    {



          $this->SetX($x);

          $this->SetFont('Arial',$style,14);

         $this->MultiCell(0,10,$content,0,$alignment,false);



    }



    function key_center_content($content, $x=65, $style='')

    {



          $this->SetX($x);

          $this->SetFont('Arial',$style,14);

          $this->MultiCell(0,10,$content,0,"C",false);



    }



    function content($title,$content)

    {

      $this->ln(5);

      $this->SetX(20);

			$this->SetFont('Arial', 'B', 16);

			$this->writeHTML("<b>".$title."</b>");

			$this->SetX(20);

      $this->SetFont('Arial','',14);

      $this->ln(10);

      $this->MultiCell(0,10,$content,0,'FJ',false);





    }



    function keypage($title,$subtitle,$content='')

    {



      $this->mainhead($title,40,'B',20);

      $this->subhead($subtitle,30,'B');

	    if($content)

		  $this->normal_center($content,14,'',9);



    }



    public function pageWidth()

    {

            $width = $this->w;

            $leftMargin = $this->lMargin;

            $rightMargin = $this->rMargin;

            return $width-$rightMargin-$leftMargin;

    }




	function MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false, $indent=0)

	{

		//Output text with automatic or explicit line breaks

		$cw=&$this->CurrentFont['cw'];

		if($w==0)

			$w=$this->w-$this->rMargin-$this->x;



		$wFirst = $w-$indent;

		$wOther = $w;



		$wmaxFirst=($wFirst-2*$this->cMargin)*1000/$this->FontSize;

		$wmaxOther=($wOther-2*$this->cMargin)*1000/$this->FontSize;



		$s=str_replace("\r",'',$txt);

		$nb=strlen($s);

		if($nb>0 && $s[$nb-1]=="\n")

			$nb--;

		$b=0;

		if($border)

		{

			if($border==1)

			{

				$border='LTRB';

				$b='LRT';

				$b2='LR';

			}

			else

			{

				$b2='';

				if(is_int(strpos($border,'L')))

					$b2.='L';

				if(is_int(strpos($border,'R')))

					$b2.='R';

				$b=is_int(strpos($border,'T')) ? $b2.'T' : $b2;

			}

		}

		$sep=-1;

		$i=0;

		$j=0;

		$l=0;

		$ns=0;

		$nl=1;

			$first=true;

		while($i<$nb)

		{

			//Get next character

			$c=$s[$i];

			if($c=="\n")

			{

				//Explicit line break

				if($this->ws>0)

				{

					$this->ws=0;

					$this->_out('0 Tw');

				}

				$this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);

				$i++;

				$sep=-1;

				$j=$i;

				$l=0;

				$ns=0;

				$nl++;

				if($border && $nl==2)

					$b=$b2;

				continue;

			}

			if($c==' ')

			{

				$sep=$i;

				$ls=$l;

				$ns++;

			}

			$l+=$cw[$c];



			if ($first)

			{

				$wmax = $wmaxFirst;

				$w = $wFirst;

			}

			else

			{

				$wmax = $wmaxOther;

				$w = $wOther;

			}



			if($l>$wmax)

			{

				//Automatic line break

				if($sep==-1)

				{

					if($i==$j)

						$i++;

					if($this->ws>0)

					{

						$this->ws=0;

						$this->_out('0 Tw');

					}

					$SaveX = $this->x;

					if ($first && $indent>0)

					{

						$this->SetX($this->x + $indent);

						$first=false;

					}

					$this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);

						$this->SetX($SaveX);

				}

				else

				{

					if($align=='J')

					{

						$this->ws=($ns>1) ? ($wmax-$ls)/1000*$this->FontSize/($ns-1) : 0;

						$this->_out(sprintf('%.3f Tw',$this->ws*$this->k));

					}

					$SaveX = $this->x;

					if ($first && $indent>0)

					{

						$this->SetX($this->x + $indent);

						$first=false;

					}

					$this->Cell($w,$h,substr($s,$j,$sep-$j),$b,2,$align,$fill);

						$this->SetX($SaveX);

					$i=$sep+1;

				}

				$sep=-1;

				$j=$i;

				$l=0;

				$ns=0;

				$nl++;

				if($border && $nl==2)

					$b=$b2;

			}

			else

				$i++;

		}

		//Last chunk

		if($this->ws>0)

		{

			$this->ws=0;

			$this->_out('0 Tw');

		}

		if($border && is_int(strpos($border,'B')))

			$b.='B';

		$this->Cell($w,$h,substr($s,$j,$i),$b,2,$align,$fill);

		$this->x=$this->lMargin;

	}

}

