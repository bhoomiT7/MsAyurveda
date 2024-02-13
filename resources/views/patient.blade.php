<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prakruti Analysis</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    <link href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="main-text">
            <h1>Body type-Prakruti Analysis Test</h1>
            <h4>which highly apply to you</h4>
        </div>
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
                                        <span>Normal, Thin, More Hair fll</span>
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
                                        <span>Medium, Can Easily Lossor Gain Weight</span>
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
                                        <span>Medium Sizr, Yellowish</span>
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
                                    <input type="radio" id="prakriti-Body-Frame-vatta12" name="Body-Frame12" value="vatta" title="Interrupted, Less" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta12">
                                        <span>Interrupted, Less</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta12" name="Body-Frame12" value="pitta" title="Moderate" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta12">
                                        <span>Moderate</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha12" name="Body-Frame12" value="kapha" title="Sleepy, Lazy" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Dislike Cold</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta13" name="BodyFrame13" value="pitta" title="Dislike Heat" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Dislike Heat</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha13" name="BodyFrame13" value="kapha" title="Dislike Moist, Rainy and Cool Weather" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                        <div class="prakritiQuestioncounter">
                            <p class="text-center">14/27</p>
                        </div>
                    </div>
                    <div class="col-sm-6 prakritiAnswers">
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-vatta14" name="BodyFrame14" value="vatta" title="Anxiety, Worry, Irritability" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Anxiety, Worry, Irritability</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta14" name="BodyFrame14" value="pitta" title="Anger, Aggression" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Anger, Aggression</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha14" name="BodyFrame14" value="kapha" title="Calm, Reclusive, sometimes Depressive" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Changes Quickly have Frequent Mood Swings</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta15" name="BodyFrame15" value="pitta" title="Changes Slowly" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Changes Slowly</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha15" name="BodyFrame15" value="kapha" title="Stable Constant" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Eat Quickly Without Chewing Properly</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta16" name="BodyFrame16" value="pitta" title="Eat at the Moderate Speed" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Eat at the Moderate Speed</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha16" name="BodyFrame16" value="kapha" title="Chews Food Properly" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Irregular, Any Time</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta17" name="BodyFrame17" value="pitta" title="Sudden Hunger Pangs, Sharp Hunger" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Sudden Hunger Pangs, Sharp Hunger</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha17" name="BodyFrame17" value="kapha" title="Can Skip Meal Easily" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Less than Normal, hands and Feet are Cold</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta18" name="BodyFrame18" value="pitta" title="More than Normal, face and Forehead Hot" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>More than Normal, face and Forehead Hot</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha18" name="BodyFrame18" value="kapha" title="Normal, Hands and Feet Slightly Cold" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Weak, Noice on Movement</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta19" name="BodyFrame19" value="pitta" title="Healty with Optional Strength" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Healty with Optional Strength</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha19" name="BodyFrame19" value="kapha" title="Heavy Weight Bearing" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Fearful, Jealous</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta20" name="BodyFrame20" value="pitta" title="Egoistic, Fearless" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Egoistic, Fearless</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha20" name="BodyFrame20" value="kapha" title="Forgiving, Grateful, NotGreedy" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
                                        <span>Forgiving, Grateful, NotGreedy</span>
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
                                    <input type="radio" id="prakriti-Body-Frame-vatta21" name="Body-Frame21" value="vatta" title="Becomes Low in Evening, Fatigues After Less Work" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Becomes Low in Evening, Fatigues After Less Work</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta21" name="Body-Frame21" value="pitta" title="Moderate, Gets Tired After Medium Work" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Moderate, Gets Tired After Medium Work</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha21" name="Body-Frame21" value="kapha" title="Excellent Eneragy Throughout Day Not Easily Fatigued" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <input type="radio" id="prakriti-Body-Frame-vatta22" name="Body-Frame22" value="vatta" title="Rough with Broken Words" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Rough with Broken Words</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta22" name="Body-Frame22" value="pitta" title="Fast Commanding" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Fast Commanding</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha22" name="Body-Frame22" value="kapha" title="Soft and Deep" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <input type="radio" id="prakriti-Body-Frame-vatta23" name="Body-Frame23" value="vatta" title="Sky, Wind, Flying Object and Confusion" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Sky, Wind, Flying Object and Confusion</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta23" name="Body-Frame23" value="pitta" title="Fire, Light, Bright Colors, Violence" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Fire, Light, Bright Colors, Violence</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha23" name="Body-Frame23" value="kapha" title="Water Pools, Gardens and Good Relationship" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <input type="radio" id="prakriti-Body-Frame-vatta24" name="Body-Frame24" value="Make Less Friends Prefers Solitude" title="Thin and Lean" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Make Less Friends Prefers Solitude</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta24" name="Body-Frame24" value="pitta" title="Good NO. Of Friends" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Good NO. Of Friends</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha24" name="Body-Frame24" value="kapha" title="Loves to Socialize. Relationship are Long Lasting" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
                                        <span>Loves to Socialize. Relationship are Long Lasting</span>
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
                                    <input type="radio" id="prakriti-Body-Frame-vatta25" name="Body-Frame25" value="vatta" title="Spends Without Thinking Much" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Spends Without Thinking Much</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta26" name="Body-Frame25" value="pitta" title="Saves but Spends on Valuable things" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Saves but Spends on Valuable things</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha25" name="BodyFrame25" value="kapha" title="Prefer More Savings" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Dry, Hard, Blackish, Scanty Stools</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta26" name="BodyFrame26" value="pitta" title="Sof, Yellowish, loose Stools" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Sof, Yellowish, loose Stools</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha26" name="BodyFrame26" value="kapha" title="Heavy, Thik, Sticky Stools" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
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
                                    <label class="label" for="prakriti-Body-Frame-vatta8">
                                        <span>Fast, Irrelevant Talk, Speech not Clear</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-pitta27" name="BodyFrame27" value="pitta" title="Good Speaker with Geniune Argumentative Skills" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-pitta8">
                                        <span>Good Speaker with Geniune Argumentative Skills</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="prakritiAnswer">
                            <div class="field field-prakriti-Body-Frame">
                                <div class="control">
                                    <input type="radio" id="prakriti-Body-Frame-kapha27" name="BodyFrame27" value="kapha" title="Auhoritative, Firm and Little Speech" class="radio required-entry" data-validate="{'validate-one-required-by-name':true}">
                                    <label class="label" for="prakriti-Body-Frame-kapha8">
                                        <span>Auhoritative, Firm and Little Speech</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
        </div>
    </div>
    <button type="submit" id="submit">Submit</button>
    <button type="button" id="generatePdfBtn">Generate Pdf</button>
</form>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
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
        alert(vatta);alert(pitta);alert(kapha);
    // If all sections are valid, submit the form
    if (allSectionsValid) {
        var form = this;
        alert($(form).attr('action'));
        $.ajax({
            type: $(form).attr('method'),
            url: $(form).attr('action'),
            data: $(form).serialize(),
            success: function(response) {
                // Assuming the response contains the route or URL
               // window.location.href = response.route;
                $('input[type="radio"]').prop('checked', false);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    } else {
        alert('Please select one of the options in all sections.');
    }
    });


    document.addEventListener("DOMContentLoaded", function() {
    var generatePdfBtn = document.getElementById("generatePdfBtn");
    generatePdfBtn.addEventListener("click", function() {
        // Redirect to the view_pdf route
        window.location.href = "/viewpdf"; // Replace with your actual route
    });
});
</script>
