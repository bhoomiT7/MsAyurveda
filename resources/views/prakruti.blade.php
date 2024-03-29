<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prakruti Analysis</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    <link href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body style="background-color:#f6f8fa">
    <div class="container ">
        <div class="main-text">
            <h1>Body type-Prakruti Analysis Test</h1>
            <h4>which highly apply to you</h4>
        </div>
        <!-- open form -->
        <form id="analysis_test" method="post" action="{{route('create_analysis')}}">
            @csrf
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Body Frame</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">1/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta1" name="BodyFrame1" value="vatta" title="Thin and Lean" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta1">
                                        <span>Thin and Lean</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta1" name="BodyFrame1" value="pitta" title="Medium" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta1">
                                        <span>Medium</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha1" name="BodyFrame1" value="kapha" title="Well Built" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha1">
                                        <span>Well Built</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Type of Hair</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">2/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta2" name="BodyFrame2" value="vatta" title="Dry and With Split End" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta2">
                                        <span>Dry and With Split End</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta2" name="BodyFrame2" value="pitta" title="Normal, Thin, More Hair fll" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta2">
                                        <span>Normal, Thin, More Hair fall</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha2" name="BodyFrame2" value="kapha" title="Greasy, Heavy" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha2">
                                        <span>Greasy, Heavy</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Color of Hair</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">3/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta3" name="BodyFrame3" value="vatta" title="Pale Brown" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta3">
                                        <span>Pale Brown</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta3" name="BodyFrame3" value="pitta" title="Grey" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta3">
                                        <span>Grey</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha3" name="BodyFrame3" value="kapha" title="Black" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha3">
                                        <span>Black</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <3> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Skin</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">4/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta4" name="BodyFrame4" value="vatta" title="Dry, Rough" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta4">
                                        <span>Dry, Rough</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta4" name="BodyFrame4" value="pitta" title="Soft, More Sweating, Acne" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta4">
                                        <span>Soft, More Sweating, Acne</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha4" name="BodyFrame4" value="kapha" title="Moist, Greasy" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha4">
                                        <span>Moist, Greasy</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <4> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Complexian</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">5/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta5" name="BodyFrame5" value="vatta" title="Dark, Blackish" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta5">
                                        <span>Dark, Blackish</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta5" name="BodyFrame5" value="pitta" title="Pinkish, Shiny" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta5">
                                        <span>Pinkish, Shiny</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha5" name="BodyFrame5" value="kapha" title="Glowing, White" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha5">
                                        <span>Glowing, White</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <5> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Body Weight</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">6/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta6" name="BodyFrame6" value="vatta" title="Low, Difficult to Put on Weight" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta6">
                                        <span>Low, Difficult to Put on Weight</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta6" name="BodyFrame6" value="pitta" title="Medium, Can Easily Lossor Gain Weight" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta6">
                                        <span>Medium, Can Easily Loss or Gain Weight</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha6" name="BodyFrame6" value="kapha" title="Overweight, Difficult to Loss Weight" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha6">
                                        <span>Overweight, Difficult to Loss Weight</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <6> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Nails</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">7/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta7" name="BodyFrame7" value="vatta" title="Blackish, Small, Brittle" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta7">
                                         <span>Blackish, Small, Brittle</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta7" name="BodyFrame7" value="pitta" title="Redish, Small" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta7">
                                        <span>Redish, Small</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha7" name="Body-Frame7" value="kapha" title="Pinkish, Big, Smooth" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha7">
                                        <span>Pinkish, Big, Smooth</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <7> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Size and Color of the Teeth</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">8/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta8" name="BodyFrame8" value="vatta" title="Very Big or Very Small, irregular, Blackish" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Very Big or Very Small, irregular, Blackish</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta8" name="BodyFrame8" value="pitta" title="Medium Sizr, Yellowish" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Medium Size, Yellowish</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha8" name="BodyFrame8" value="kapha" title="Large, Shinning White" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
                                        <span>Large, Shinning White</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <9> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Pace of Performing Work</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">9/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta9" name="BodyFrame9" value="vatta" title="Fast, Always in Hurry" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta9">
                                        <span>Fast, Always in Hurry</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta9" name="BodyFrame9" value="pitta" title="Medium, Energetic" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta9">
                                        <span>Medium, Energetic</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha9" name="BodyFrame9" value="kapha" title="Slow, Steady" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha9">
                                        <span>Slow, Steady</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <10> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Mental Activity</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">10/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta10" name="BodyFrame10" value="vatta" title="Quick, Restless" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta10">
                                        <span>Quick, Restless</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta10" name="BodyFrame10" value="pitta" title="Smart Intellect, Aggressive" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta10">
                                        <span>Smart Intellect, Aggressive</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha10" name="BodyFrame10" value="kapha" title="Calm, Stable" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha10">
                                        <span>Calm, Stable</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <11> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Memory</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">11/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta11" name="BodyFrame11" value="vatta" title="Short Term Bad" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta11">
                                        <span>Short Term Bad</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta11" name="BodyFrame11" value="pitta" title="Good Memory" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta11">
                                        <span>Good Memory</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha11" name="BodyFrame11" value="kapha" title="Long Term Best" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha11">
                                        <span>Long Term Best</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <12> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Sleep Pattern</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">12/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta12" name="BodyFrame12" value="vatta" title="Interrupted, Less" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta12">
                                        <span>Interrupted, Less</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta12" name="BodyFrame12" value="pitta" title="Moderate" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta12">
                                        <span>Moderate</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha12" name="BodyFrame12" value="kapha" title="Sleepy, Lazy" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha12">
                                        <span>Sleepy, Lazy</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <13> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Weather Conditions</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">13/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta13" name="BodyFrame13" value="vatta" title="Dislike Cold" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta13">
                                        <span>Dislike Cold</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta13" name="BodyFrame13" value="pitta" title="Dislike Heat" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta13">
                                        <span>Dislike Heat</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha13" name="BodyFrame13" value="kapha" title="Dislike Moist, Rainy and Cool Weather" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha13">
                                        <span>Dislike Moist, Rainy and Cool Weather</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <14> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Reactions Under Adverse Situation</div>
                        <div class="prakritiQuestioncounter14">
                            <p class="text-center">14/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta14" name="BodyFrame14" value="vatta" title="Anxiety, Worry, Irritability" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta14">
                                        <span>Anxiety, Worry, Irritability</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta14" name="BodyFrame14" value="pitta" title="Anger, Aggression" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta14">
                                        <span>Anger, Aggression</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha14" name="BodyFrame14" value="kapha" title="Calm, Reclusive, sometimes Depressive" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha14">
                                        <span>Calm, Reclusive, sometimes Depressive</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <15> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Mood</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">15/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta15" name="BodyFrame15" value="vatta" title="Changes Quickly have Frequent Mood Swings" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta15">
                                        <span>Changes Quickly have Frequent Mood Swings</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta15" name="BodyFrame15" value="pitta" title="Changes Slowly" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta15">
                                        <span>Changes Slowly</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha15" name="BodyFrame15" value="kapha" title="Stable Constant" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha15">
                                        <span>Stable Constant</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <16> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Eating Habit</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">16/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta16" name="BodyFrame16" value="vatta" title="Eat Quickly Without Chewing Properly" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta16">
                                        <span>Eat Quickly Without Chewing Properly</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta16" name="BodyFrame16" value="pitta" title="Eat at the Moderate Speed" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta16">
                                        <span>Eat at the Moderate Speed</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha16" name="BodyFrame16" value="kapha" title="Chews Food Properly" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha16">
                                        <span>Chews Food Properly</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <17> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Hunger</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">17/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta17" name="BodyFrame17" value="vatta" title="Irregular, Any Time" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta17">
                                        <span>Irregular, Any Time</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta17" name="BodyFrame17" value="pitta" title="Sudden Hunger Pangs, Sharp Hunger" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta17">
                                        <span>Sudden Hunger Pangs, Sharp Hunger</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha17" name="BodyFrame17" value="kapha" title="Can Skip Meal Easily" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha17">
                                        <span>Can Skip Meal Easily</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <18> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Body Temperature</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">18/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta18" name="BodyFrame18" value="vatta" title="Less than Normal, hands and Feet are Cold" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta18">
                                        <span>Less than Normal, hands and Feet are Cold</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta18" name="BodyFrame18" value="pitta" title="More than Normal, face and Forehead Hot" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta18">
                                        <span>More than Normal, face and Forehead Hot</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha18" name="BodyFrame18" value="kapha" title="Normal, Hands and Feet Slightly Cold" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha18">
                                        <span>Normal, Hands and Feet Slightly Cold</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <19> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Joints</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">19/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta19" name="BodyFrame19" value="vatta" title="Weak, Noice on Movement" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta19">
                                        <span>Weak, Noice on Movement</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta19" name="BodyFrame19" value="pitta" title="Healty with Optional Strength" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta19">
                                        <span>Healty with Optional Strength</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha19" name="BodyFrame19" value="kapha" title="Heavy Weight Bearing" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha19">
                                        <span>Heavy Weight Bearing</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <20> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Nature</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">20/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta20" name="BodyFrame20" value="vatta" title="Fearful, Jealous" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta20">
                                        <span>Fearful, Jealous</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta20" name="BodyFrame20" value="pitta" title="Egoistic, Fearless" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta20">
                                        <span>Egoistic, Fearless</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha20" name="BodyFrame20" value="kapha" title="Forgiving, Grateful, NotGreedy" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha20">
                                        <span>Forgiving, Grateful, Not Greedy</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <21> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Body Energy</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">21/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta21" name="BodyFrame21" value="vatta" title="Becomes Low in Evening, Fatigues After Less Work" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta21">
                                        <span>Becomes Low in Evening, Fatigues After Less Work</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta21" name="BodyFrame21" value="pitta" title="Moderate, Gets Tired After Medium Work" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta21">
                                        <span>Moderate, Gets Tired After Medium Work</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha21" name="BodyFrame21" value="kapha" title="Excellent Eneragy Throughout Day Not Easily Fatigued" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha21">
                                        <span>Excellent Eneragy Throughout Day Not Easily Fatigued</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <22> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Quality of Voice</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">22/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta22" name="BodyFrame22" value="vatta" title="Rough with Broken Words" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta22">
                                        <span>Rough with Broken Words</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta22" name="BodyFrame22" value="pitta" title="Fast Commanding" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta22">
                                        <span>Fast Commanding</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha22" name="BodyFrame22" value="kapha" title="Soft and Deep" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha22">
                                        <span>Soft and Deep</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <23> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Dreams</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">23/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta23" name="BodyFrame23" value="vatta" title="Sky, Wind, Flying Object and Confusion" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta23">
                                        <span>Sky, Wind, Flying Object and Confusion</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta23" name="BodyFrame23" value="pitta" title="Fire, Light, Bright Colors, Violence" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta23">
                                        <span>Fire, Light, Bright Colors, Violence</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha23" name="BodyFrame23" value="kapha" title="Water Pools, Gardens and Good Relationship" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha23">
                                        <span>Water Pools, Gardens and Good Relationship</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <24> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Social Relations</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">24/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta24" name="BodyFrame24" value="Make Less Friends Prefers Solitude" title="Thin and Lean" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta24">
                                        <span>Make Less Friends Prefers Solitude</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta24" name="BodyFrame24" value="pitta" title="Good No. of Friends" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta24">
                                        <span>Good No. of Friends</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha24" name="BodyFrame24" value="kapha" title="Loves to Socialize. Relationship are Long Lasting" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha24">
                                        <span>Loves to Socialize. Relationships are Long Lasting</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <25> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Wealth</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">25/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta25" name="BodyFrame25" value="vatta" title="Spends Without Thinking Much" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta25">
                                        <span>Spends Without Thinking Much</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta25" name="BodyFrame25" value="pitta" title="Saves but Spends on Valuable things" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta25">
                                        <span>Saves but Spends on Valuable Things</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha25" name="BodyFrame25" value="kapha" title="Prefer More Savings" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha25">
                                        <span>Prefer More Savings</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <26> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Bowel Movment</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">26/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta26" name="BodyFrame26" value="vatta" title="Dry, Hard, Blackish, Scanty Stools" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta26">
                                        <span>Dry, Hard, Blackish, Scanty Stools</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta26" name="BodyFrame26" value="pitta" title="Sof, Yellowish, loose Stools" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta26">
                                        <span>Sof, Yellowish, loose Stools</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha26" name="BodyFrame26" value="kapha" title="Heavy, Thik, Sticky Stools" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha26">
                                        <span>Heavy, Thik, Sticky Stools</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- <27> -->
            <div class=" prakriti-form">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="title">Communication Skill</div>
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">27/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta27" name="BodyFrame27" value="vatta" title="Fast, Irrelevant Talk, Speech not Clear" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta27">
                                        <span>Fast, Irrelevant Talk, Speech not Clear</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta27" name="BodyFrame27" value="pitta" title="Good Speaker with Geniune Argumentative Skills" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta27">
                                        <span>Good Speaker with Geniune Argumentative Skills</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha27" name="BodyFrame27" value="kapha" title="Auhoritative, Firm and Little Speech" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha27">
                                        <span>Auhoritative, Firm and Little Speech</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <input type="text" name="vatta" id="vatta" hidden>
            <input type="text" name="pitta" id="pitta" hidden>
            <input type="text" name="kapha" id="kapha" hidden >
     
           
                      <div class="footer-button">
                <input type="submit" id="submit" class="prakriti-submit" value="Submit">
                <input type="reset" class="prakriti-reset" value="Reset">
            </div>
        </form>
</div>
        @if($status==1)
        <div id="result">
      
            <!--start analysis test-->
            

        <div style="width: 50%; margin: 0 auto; display: flex; justify-content: flex-end;">
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
 <button type="button" id="generatePdfBtn">Generate Pdf</button>
        <!--End-->
    </div>
        @endif
 -
   


    <!-- open modal -->
        <!-- Your modal HTML -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-md"> <!-- Add modal-lg class here -->
        <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Enter Personal Details</h4>
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                </div>
            <!-- Modal body -->
            <div class="modal-body">
                <!-- Form to enter name and password -->
                <form id="client_modal" method="post" action="{{ route('create') }}" target="_blank">
                    <div class="modalrow">
                        @csrf 
                        <div class="row">
                            <div class="col-md-6 modalmainform">
                                <label for="firstName" class="heading">First Name</label>
                                <input type="text" class="modalform" id="firstName" name="firstname" placeholder="First Name" style="text-transform:uppercase">
                            </div>
                            <div class=" col-md-6 modalmainform">
                                <label for="lastName" class="heading">Last Name</label>
                                <input type="text" class="modalform" id="lastName" name="lastname" placeholder="Last Name" style="text-transform:uppercase">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6 modalmainform">
                            <label for="contactNo" class="heading">Contact No</label>
                            <input type="tel" class="modalform" id="contactNo" name="contact" placeholder="Contact No" minlength="10" maxlength="10">
                            <div id="contactNoError" class="error-message"></div>
                        </div>

                            <div class=" col-md-6 modalmainform">
                            <label for="city" class="heading">City</label>
                            <input type="text" class="modalform" id="city" name="city" placeholder="City...." style="text-transform:uppercase">
                        </div>
                        </div>
                        <div class="modalmainform">
                                <label for="email" class="heading">Email Id</label>
                                <input type="email" class="modalform" id="email" name="email" placeholder="Email Id">
                        </div>
                        <div class="row">
                            <div class=" col-md-6 modalmainform1">
                                <label for="birthDate" class="heading">Age</label>
                                <input type="number" class="modalform" id="birthDate" name="age" placeholder="Age">
                            </div>
                            <div class=" col-md-6 modalmainform">
                                <label for="gender" class="heading">Gender</label><br>
                                <input type="radio" name="gender" class="radiobtn" value="male" id="male"> Male
                                <input type="radio" name="gender"  value="female"> Female
                            </div>
                        </div>
                    </div>
                    <div class="modal-container">
                        <button type="submit" class="modalbutton" id="generatepdf">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- close modal -->
    <script src="bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    
</body>
</html>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.prakriti-form');
    /*Hide PRakruti Test Result Div*/
    
    forms.forEach(form => {
        const radioButtons = form.querySelectorAll('input[type="radio"]');
        
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', function() {
                // Remove 'active' class from all .prakritiAnswer divs within this form
                form.querySelectorAll('.prakritiAnswer').forEach(prakritiAnswer => {
                    prakritiAnswer.classList.remove('active');
                });

                // Add 'active' class to the parent .prakritiAnswer div of the checked radio button
                const parentPrakritiAnswer = this.closest('.prakritiAnswer');
                if (this.checked) {
                    parentPrakritiAnswer.classList.add('active');
                }
            });
        });
    });
});


</script>
<script>
document.getElementById('client_modal').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Send a POST request to the server to submit the form data
    fetch(this.action, {
        method: 'POST',
        body: new FormData(this),
    })
    .then(response => response.blob()) // Get the response as a blob
    .then(blob => {
        // Create a blob URL for the response
        const url = window.URL.createObjectURL(blob);

        // Open the blob URL in a new tab
        window.open(url, '_blank');

        // Release the object URL when it's no longer needed
        window.URL.revokeObjectURL(url);
    })
    .catch(error => console.error('Error:', error));
});
</script>

<script>
document.getElementById('contactNo').addEventListener('input', function() {
    var contactNo = this.value.trim();
    var errorDiv = document.getElementById('contactNoError');
    
    if (contactNo.length !== 10 || isNaN(contactNo)) {
        errorDiv.textContent = "Contact number must be a 10-digit number.";
        this.classList.add('invalid');
    } else {
        errorDiv.textContent = "";
        this.classList.remove('invalid');
    }
});
</script>


<script>
$(document).ready(function(){
    $('input[type="radio"]').change(function(){
        if ($(this).is(':checked')) {
            $(this).closest('.prakriti-form').css('border-left', '4px solid #4b794b');
        } else {
            $(this).closest('.prakriti-form').css('border-left', ''); // Reset border
        }
    });
    $('#myModal').on('shown.bs.modal', function () {
        alert("check male");
        $('#male').prop('checked', true);
    });
});
</script>

<script>
    let vatta=0,pitta=0,kapha=0;
    let selectedTitle,selectedValueselectedId;
   
    $('#analysis_test').submit(function(event) {
        event.preventDefault();

        // Variable to track if all sections have at least one radio button checked
        var allSectionsValid = true;

        // Iterate over each section

        $('.prakriti-form').each(function() {
        
        // Check if at least one radio button in this section is checked
        var sectionValid = false;
        $(this).find('input[type="radio"]').each(function() {
  
            if ($(this).is(':checked')) {
                selectedTitle =  $(this).attr('title');
                selectedValue =  $(this).val();
                if(selectedValue=='vatta')
                    {   vatta++;    }
                else if(selectedValue=='pitta')
                    {   pitta++;    }
                else{  kapha++;}
                selectedId =  $(this).attr('id');
                $('#' + selectedId).val(selectedTitle);
                $('#vatta').val(vatta);     
                $('#pitta').val(pitta);     
                $('#kapha').val(kapha);
                sectionValid = true;
                return false; // Exit the loop if one radio button is checked
            }
        }); 
        // If no radio button is checked in this section, set allSectionsValid to false
        if (!sectionValid) {
            allSectionsValid = false;
            return false; // Exit the loop if one section is invalid
        }
    });
       
    // If all sections are valid, submit the form
    
    if (allSectionsValid) {
        var form = this;
        alert( $(form).attr('action'));
        $.ajax({
            type: $(form).attr('method'),
            url: $(form).attr('action'),
            data: $(form).serialize(),
            success: function(response) {
               $('#myModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
     
    } else {
        alert('Please select one of the options in all sections.');
    }
    });

    $('#client_modal').submit(function(event) {
        $.ajax({
            type: $(form).attr('method'),
            url: $(form).attr('action'),
            data: $(form).serialize(),
            success: function(response) {
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
    var generatePdfBtn = document.getElementById("generatepdf");
    generatePdfBtn.addEventListener("click", function() {
        // Redirect to the view_pdf route

        window.location.href = "/prakruti"; // Replace with your actual route
        
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById("generatePdfBtn");
    btn.addEventListener("click", function() {
        // Redirect to the view_pdf route in a new tab
        window.open("/viewpdf", "_blank");
    });
});
</script>


