<?php
include 'main_structure/top.php';
$dataValid = True;

$zipcode = "05405";

$reason = '';

$currentTemp ='';
$wind ='';
$weatherCondition = '';

$cityName = "";
$iconCode = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $zipcode = getData("txtZipcode");

    if ($zipcode == "")
    {
        $reason = '<p class = "message indent">Please Enter the zipcode</p>';
        $dataValid = false;
    }
    elseif (!preg_match("/^[0-9]{5}$/",$zipcode) OR strlen($zipcode) != 5)
    {
        $reason = '<p class = "message indent">Please re-check your zipcode</p>';
        $dataValid = false;
    }
}
function getData($field) 
{
    if (!isset($_POST[$field])) $data = "";
    else{
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}
?>
<main>
    <article>
        <h2>Check Your Running Weather</h2>
        <section id = "zipcodeInput">
            <h3>Enter your zipcode!</h3>
            <form action = "#" method = "POST" id = "frmGetWeather">
                <fieldset id = "zipcode">
                    <p>
                        <label for="txtZipcode" class="require">ZipCode: </label>
                        <input type="text" name="txtZipcode" id="txtZipcode" value = "<?php print $zipcode;?>" placeholder ="zipcdoe" required>
                    </p>
                    <p>
                        <input type="submit" name="btnGetWeather" value="get weather">    
                    </p>
                </fieldset>
            </form>
            <?php
            if($dataValid)
            {
            // Make HTTP request and wait for the response

                $apiKEY = "35fec93bc6aff403da68b27816e3b264";
                $apiUrl = "http://api.openweathermap.org/data/2.5/weather";
                $queryString = "zip=".$zipcode."&units=metric&appid=".$apiKEY;
                $imgLink = "http://openweathermap.org/img/wn/";
                
                $response = file_get_contents("$apiUrl?$queryString");
                
                if ($response === FALSE)
                {
                    print '<section class = "error_message">';
                    die("<p class='indent message'>wrong zipcode!</p>");
                    print '</section>';
                }
                else 
                {
                    print '<aside id = "weather_info">';
                    // Convert JSON response into PHP object
                    $obj = json_decode($response);

                    $currentTemp = $obj->main->temp;
                    $iconCode = $obj->weather[0]->icon;
                    $imgLink .=$iconCode;
                    $cityName = $obj->name;
                    $wind = $obj->wind->speed;
                    $weatherCondition = $obj->weather[0]->main;
                    print '<figure id = "weather_image"><img src="'.$imgLink.'@2x.png" alt="weather icon"></figure>';
                    print '<aside id = "weather_description">';
                    print '<h4>'.$cityName.'</h4>';
                    print '<p>Temperature: <em>'.$currentTemp.'&deg;C</em>('.(int)(($currentTemp *(9/5)) + 32).'&deg;F)</p>';
                    print '<p>Wind: <em>'.$wind.' m/s</em></p>';
                    print '<p>Weather Condtion: <em>'.$weatherCondition.'</em></p>'; 
                    print '</aside>';
                    print '</aside>';
                }
            }//end data valid
            else
            {
                print '<section class = "error_message">';
                print '<h3>Something went wrong!</h3>';
                print $reason;
                print '</section>';
            }
            ?>
        </section>
        <section id = "weather_analysis">
            <h3> Weather Analysis </h3>
            <?php
                $analysis = '';
                if($dataValid)
                {
                    if($iconCode == '09d' OR $iconCode == '09n' OR $iconCode == '10d' OR $iconCode == '10n' OR $iconCode == '11d' OR $iconCode == '11n' OR $iconCode == '13d' OR $iconCode == '13n')
                    {
                        $analysis .= 'It might '.$weatherCondition.' according to <a href = "https://openweathermap.org/">openweathermap\'s</a> forcast';
                        $analysis .= ' We think it is not a good idea to go outside and run. However, if you want to run outside even in this condition...';
                    }
                    else $analysis .= 'According to <a href = "https://openweathermap.org/">openweathermap\'s</a> forcast, it might be';
                    if($currentTemp < 10)
                    {
                        $analysis .= ' cold.';
                        $analysis .= ' Bundle up!';
                    }
                    elseif($currentTemp > 10 AND $currentTemp < 20)
                    {
                        $analysis .= ' a little bit cold but still affordable.';
                        $analysis .= ' You still need a warm clothes, however.';
                        $analysis .= ' Have a nice running!'; 
                    }
                    elseif($currentTemp > 20 AND $currentTemp < 25)
                    {
                        $analysis .= ' perfect.';
                        $analysis .= ' It is neither cold nor hot. Just try not to get injured! ';
                        $analysis .= ' Let\'s go!'; 
                    }
                    elseif($currentTemp > 25)
                    {
                        $analysis .= ' hot.';
                        $analysis .= ' I really don\'t think you should run today.';
                        $analysis .= ' However, if you want, try not to over-run and avoid the sun!';
                    }
                    $analysis .= ' In addition to the temperature,';
                    if($wind < 5)
                    {
                        $analysis .= ' it is not windy at all. ';
                        $analysis .= ' If you want to run you will enjoy this good wind. ';
                    }
                    elseif($wind < 10)
                    {
                        $analysis .= ' it is a bit windy, ';
                        $analysis .= ' but you can still run. However, you will use more energy compared with usual.';
                        $analysis .= ' Don\'t feel awkward! ';
                    }
                    elseif($wind < 15)
                    {
                        $analysis .= ' it is windy. ';
                        $analysis .= ' You might not be able to run. However, if you want we cannot persuade you, but';
                        $analysis .= ' we would say, "You are so enthusiastic" if you run in this condition ';
                    }
                    elseif($wind > 15)
                    {
                        $analysis .= ' it is super windy. Something on the building might fall down.';
                        $analysis .= ' Don\'t run, and take a break for today. You might not be able to run as well.';
                        $analysis .= ' Be safe!';
                    }
                    print '<p class = "message">'.$analysis.'</p>';
                }
                else
                {
                    print '<p class = "message">Error to call analysis</p>';
                }
            ?>
        </section>
    </article>
</main>
<?php
include 'main_structure/footer.php';
?>
</body>
</html>
