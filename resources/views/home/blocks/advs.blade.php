<!--quang cao-->

	 <div id="left_ads_float" style="margin-bottom: 128px;">

        <a href="https://hi.fpt.vn/" target="_blank"><img border="0" src="{!! url('resources/upload/banner-hifpt.jpg') !!}" width="120" height="377"/>
        </a>

    </div>
    <div id="left_ads_float">
        <img border="0" src="{!! url('resources/upload/tong-dai-ban-hang-fpt.jpg') !!}" width="120" height="120"/>
    </div>

    <div id="right_ads_float" style="margin-bottom: 128px;">

       <a href="https://www.fpt.vn/tin-tuc/tin-tuc/thong-bao-tong-dai-cham-soc-khach-hang-fpt-telecom-toan-quoc-853.html" target="_blank"><img border="0" src="{!! url('resources/upload/banner_right_20_04_2016.png') !!}" width="120" height="377"/>
       </a>

    </div>
    <div id="right_ads_float">
        <img border="0" src="{!! url('resources/upload/tong-dai-ban-hang-fpt.jpg') !!}" width="120" height="120"/>
    </div>

<style>

#left_ads_float

{
    z-index: 1000;
    bottom:15px;

    position:fixed; }

#right_ads_float

{

    bottom: 15px;
	right: 0px;
    position:fixed;
    z-index: 1000;
}

</style>

<script>

var vtlai_remove_fads=false;

function vtlai_check_adswidth()

    {

        if(vtlai_remove_fads)

        {

            document.getElementById('left_ads_float').style.display='none';

            document.getElementById('right_ads_float').style.display='none';

            return;

        }else if(document.cookie.indexOf('vtlai_remove_float_ads')!=-1)

        {

            vtlai_remove_fads=true;

            vtlai_check_adswidth();

            return;

        }

        else

        {

            var lwidth=parseInt(document.body.clientWidth);

            if(lwidth<1110)

            {

                document.getElementById('left_ads_float').style.display='none';

                document.getElementById('right_ads_float').style.display='none';

            }

            else

            {

                document.getElementById('left_ads_float').style.display='block';

                document.getElementById('right_ads_float').style.display='block';

            }

            setTimeout('vtlai_check_adswidth()',10);

        }

    }

</script>