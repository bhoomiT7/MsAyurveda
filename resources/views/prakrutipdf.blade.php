<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
html{
    margin: 90px 20px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:1px;
}
th{
    font-size:12px;
}
td{
     padding:5px 5px;
     font-size:12px;
}
.center{
    text-align:center;
}
.title{
    font-size: 22px;
}
.address, .left_invoice, , .inwords, .total_amount, .bank_details, .signature{
    font-size: 11px;
}
.right_invoice
{
    font-size: 13px;
    text-align:right;
}
.no-border
{
    border-left:none;
    border-right:none;
}
.data{
    margin-left: auto; 
    margin-right: auto; 
    width:750px;
    font-size:13px;
    text-align: justify;
}
@font-face {
  font-family: 'popings';
  src: url('path/to/popings.ttf') format('truetype');
}
body {
  font-family: 'popings', sans-serif;
}
</style>
</head>
<body>
<table style="width:100%">
    <tr>
        <td class="center" colspan="6">
           <span class="title center"> Dr. Jigar Gor's Clinic Madhav Smarnam</span>  <br/><br/>
           <span class="address center">Narayan Complex, Near Lohana Samaj Wadi, Madhapar - Tal. Bhuj-Kutch<br/>
           E- mail: info@msayurved.com <br/>Mo: 9724157515</span>
        </td>
    </tr>
    <tr>
        <td colspan=3 class="left_invoice no-border">
            Name: {{ strtoupper($data->firstname) . " " .strtoupper($data->lastname)}} <br>
            City: {{ strtoupper($data->city)}} <br>
            <!-- Body Type-Prakrtui Anaysis Test -->
        </td>
        
        <td  colspan=3 class="right_invoice no-border">
            Email: {{ $data->email }} <br>
            Contact No: {{ $data->contactno}} <br>
        </td>
        
    </tr>
    <tr>
        <th colspan=6>Body Type-Prakrtui Anaysis Test
</th>
    </tr>
  <tr>
    <th>No</th>
    <th>Content</th>
    <th>Your choice</th>
    <th>No</th>
    <th>Content</th>
    <th>Your choice</th>
  </tr>

  <tr >
    <td class="center">1</td>
    <td>BodyFrame</td>
    <td>{{$data->bodyframe}} </td>

    <td class="center">15</td>
    <td>Mood</td>
    <td>{{$data->mood}} </td>
  </tr>

  <tr>
    <td class="center">2</td>
    <td>Type of Hair</td>
    <td>{{$data->typeofhair}} </td>

    <td class="center">16</td>
    <td>Eating Habit</td>
    <td>{{$data->eatinghabit}} </td>
  </tr>

  <tr>
    <td class="center">3</td>
    <td>Color of Hair</td>
    <td>{{$data->colorofhair}} </td>

    <td class="center">17</td>
    <td>Hunger</td>
    <td>{{$data->typeofhair}} </td>
  </tr>

  <tr>
    <td class="center">4</td>
    <td>Skin</td>
    <td>{{$data->skin}} </td>

    <td class="center">18</td>
    <td>Body Temperature</td>
    <td>{{$data->	bodytemperature}} </td>
  </tr>

  <tr>
    <td class="center">5</td>
    <td>Complexion</td>
    <td>{{$data->complexion}} </td>

    <td class="center">19</td>
    <td>Joints</td>
    <td>{{$data->joints}} </td>
  </tr>

  
  <tr>
    <td class="center">6</td>
    <td>Body Weight</td>
    <td>{{$data->bodyweight}} </td>

    <td class="center">20</td>
    <td>Nature</td>
    <td>{{$data->nature}} </td>
  </tr>

  <tr>
    <td class="center">7</td>
    <td>Nails</td>
    <td>{{$data->nails}} </td>

    <td class="center">21</td>
    <td>Body Energy</td>
    <td>{{$data->bodyenergy}} </td>
  </tr>

  <tr>
    <td class="center">8</td>
    <td>Size and Color of the Teeth</td>
    <td>{{$data->sizeandcoloroftheteeth}} </td>

    <td class="center">22</td>
    <td>Quality of Voice</td>
    <td>{{$data->qualityofvoice}} </td>
  </tr>

  <tr>
    <td class="center">9</td>
    <td>Pace of Performing work</td>
    <td>{{$data->paceofperformingwork}} </td>

    <td class="center">23</td>
    <td>Dreams</td>
    <td>{{$data->dreams}} </td>
  </tr>

  <tr>
    <td class="center">10</td>
    <td>Mental Activity</td>
    <td>{{$data->mentalactivity}} </td>

    <td class="center">24</td>
    <td>Social Relations</td>
    <td>{{$data->socialrelations}} </td>
  </tr>

  
  <tr>
    <td class="center">11</td>
    <td>Memory</td>
    <td>{{$data->memory}} </td>

    <td class="center">25</td>
    <td>Wealth</td>
    <td>{{$data->wealth}} </td>
  </tr>

  <tr>
    <td class="center">12</td>
    <td>Sleep Pattern</td>
    <td>{{$data->sleeppattern}} </td>

    <td class="center">26</td>
    <td>Bowel Movement</td>
    <td>{{$data->  bowelmovement}} </td>
  </tr>

  <tr>
    <td class="center">13</td>
    <td>Weather Conditions</td>
    <td>{{$data->weatherconditions}} </td>
    
    <td class="center">27</td>
    <td>Communication Skill</td>
    <td>{{$data->communicationskill}} </td>
  </tr>

  <tr>
    <td class="center">14</td>
    <td>Reactions Under Adverse Situation</td>
    <td >{{$data->reactionsunderadversesituation}} </td>
    <td></td>  <td></td>  <td></td> 
  </tr>

  

</table>
<div style=" width:60%;margin: auto;">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($chartdata['labels']),
                datasets: [{
                    label: 'Data',
                    data: @json($chartdata['data']),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // First bar color
                        'rgba(54, 162, 235, 0.2)', // Second bar color
                        'rgba(255, 206, 86, 0.2)', // Third bar color
                        // Add more colors as needed
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                // Add corresponding border colors if needed
                    ],
                    borderWidth: 1
                }]
            },
            options: {
            scales: {
                y: {
                    beginAtZero: false, // Set to false
                    min: 10,
                    max: 100,
                    ticks: {
                        callback: function(value, index, values) {
                            return value + '%';
                        },
                        stepSize: 10
                    }
                }
            }
        }
        });
    </script>
  
    @if(( $data->vatta > $data->pitta) && ( $data->vatta > $data->kapha))
        <h2 class="center">Your body type is :Vata</h2><br>
        <div class="center">
            <p class="data">
                Imbalanced Vata:<br>
                When out of balance, vata tends to cause fear, anxiety, isolation, loneliness and exhaustion. It can lead to both 
                physical and energetic depletion, disrupt proper communication and cause all sorts of abnormal movments in the body,
                such as tics, tremors and muscle spasms.</p><br><br>
        </div>
        <div style="text-align: center;">
            <a href="#" style="text-decoration: none;">For more information talk to our Doctor.</a>
        </div>
    @endif
    @if(( $data->pitta > $data->vatta) && ( $data->pitta > $data->kapha))
        <h2 class="center">Your body type is:Pitta</h2><br>
        <div class="center">
            <p class="data">
                Imbalanced Pitta:<br>
                When out of balance, Pitta causes fiery, reactionary emotions such as frustration, anger, jealousy and critisum.
                Imbalanced pitta is often at the root of inflammatory disorders, which can affect organs and tissues throughout the
                body.</p><br><br>
        </div>
            <div style="text-align: center;">
                <a href="#" style="text-decoration: none;">For more information talk to our Doctor.</a>
            </div>
    @endif

    @if(($data->kapha > $data->vatta) && ( $data->kapha > $data->pitta))
    <h2 class="center">Your body type is:Kapha</h2><br>
    <div class="center">
            <p class="data">
        Imbalanced Vata:<br>
        When out of balance, Kapha triggers emotions of attachment, greed and possessivness and can also create stubborness,
        lethargy and resistance to change. physically, kapha tends to invite stragnation and congestion in organs and tissues
        throughout the body-including mind.</p><br><br>
        </div>
        <div style="text-align: center;">
            <a href="#" style="text-decoration: none;">For more information talk to our Doctor.</a>
        </div>
    @endif

    @if($data->vatta == $data->kapha )
         @if($data->vatta == $data->pitta)
         <h2 class="center">Your body type is :Vata, Pitta, Kapha</h2><br>
         <div class="center">
            <p class="data">
        <b>Imbalanced Vata:</b><br>
        When out of balance, vata tends to cause fear, anxiety, isolation, loneliness and exhaustion. It can lead to both 
        physical and energetic depletion, disrupt proper communication and cause all sorts of abnormal movments in the body,
        such as tics, tremors and muscle spasms.<br><br>
        <b>Imbalanced Pitta:</b><br>
        When out of balance, Pitta causes fiery, reactionary emotions such as frustration, anger, jealousy and critisum.
        Imbalanced pitta is often at the root of inflammatory disorders, which can affect organs and tissues throughout the
        body.<br><br>
        <b>Imbalanced Kapha:</b><br>
        When out of balance, Kapha triggers emotions of attachment, greed and possessivness and can also create stubborness,
        lethargy and resistance to change. physically, kapha tends to invite stragnation and congestion in organs and tissues
        throughout the body-including mind.</p><br><br>
        </div>
        <div style="text-align: center;">
            <a href="#" style="text-decoration: none;">For more information talk to our Doctor.</a>
        </div>
        @endif
        @if($data->pitta< $data->vatta)
        <h2 class="center">Your body type is :Vata, Kapha</h2><br>
        <div class="center">
            <p class="data">
        Imbalanced Vata:<br>
        When out of balance, vata tends to cause fear, anxiety, isolation, loneliness and exhaustion. It can lead to both 
        physical and energetic depletion, disrupt proper communication and cause all sorts of abnormal movments in the body,
        such as tics, tremors and muscle spasms.<br><br>
        Imbalanced Kapha:<br>
        When out of balance, Kapha triggers emotions of attachment, greed and possessivness and can also create stubborness,
        lethargy and resistance to change. physically, kapha tends to invite stragnation and congestion in organs and tissues
        throughout the body-including mind.</p><br><br>
        </div>
        <div style="text-align: center;">
            <a href="#" style="text-decoration: none;">For more information talk to our Doctor.</a>
        </div>
        @endif
    @endif
    @if($data->pitta == $data->vatta)
        @if($data->kapha < $data->pitta)
        <h2 class="center">Your body type is :Vata , Pitta</h2><br>
        <div class="center">
            <p class="data">
                Imbalanced Vata:<br>
                When out of balance, vata tends to cause fear, anxiety, isolation, loneliness and exhaustion. It can lead to both 
                physical and energetic depletion, disrupt proper communication and cause all sorts of abnormal movments in the body,
                such as tics, tremors and muscle spasms.<br><br>
                Imbalanced Pitta:<br>
                When out of balance, Pitta causes fiery, reactionary emotions such as frustration, anger, jealousy and critisum.
                Imbalanced pitta is often at the root of inflammatory disorders, which can affect organs and tissues throughout the
                body.</p><br><br>
        </div>
        <div style="text-align: center;">
            <a href="#" style="text-decoration: none;">For more information talk to our Doctor.</a>
        </div>
        @endif
    @endif
    @if($data->pitta == $data->kapha)
        @if($data->vatta < $data->pitta)
        <h2 class="center">Your body type is:Pitta, Kapha</h2><br>
        <div class="center">
            <p class="data">
        Imbalanced Pitta:<br>
        When out of balance, Pitta causes fiery, reactionary emotions such as frustration, anger, jealousy and critisum.
        Imbalanced pitta is often at the root of inflammatory disorders, which can affect organs and tissues throughout the
        body.<br><br>
        Imbalanced Kapha:<br>
        When out of balance, Kapha triggers emotions of attachment, greed and possessivness and can also create stubborness,
        lethargy and resistance to change. physically, kapha tends to invite stragnation and congestion in organs and tissues
        throughout the body-including mind.</p><br><br>
        </div>
        <div style="text-align: center;">
            <a href="#" style="text-decoration: none;">For more information talk to our Doctor.</a>
        </div>
        @endif
    @endif


       

    



</body>
</html>