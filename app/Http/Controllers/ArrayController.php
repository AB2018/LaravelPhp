<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  


        $arr = array(
            array(
                "user_id" => 6845,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 5333,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 7708,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 5811,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7015,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8405,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7609,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7596,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 8937,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8028,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7191,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7191,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9663,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5037,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 9,
                "city_id" => 1
            ),
            array(
                "user_id" => 8694,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6843,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8088,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8768,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 6775,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 4062,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9701,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9720,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7067,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8002,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8777,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8095,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5475,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8042,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7343,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8597,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5885,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8038,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 4976,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9769,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 9,
                "city_id" => 6
            ),
            array(
                "user_id" => 6423,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 9,
                "city_id" => 7
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 9,
                "city_id" => 3
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 9,
                "city_id" => 7
            ),
            array(
                "user_id" => 9476,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 8522,
                "plan_id" => 9,
                "city_id" => 167
            ),
            array(
                "user_id" => 8254,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 4328,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 9,
                "city_id" => 164
            ),
            array(
                "user_id" => 8248,
                "plan_id" => 9,
                "city_id" => 3
            ),
            array(
                "user_id" => 6924,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 5608,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 9459,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 8255,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9635,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3418,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 3418,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9516,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9625,
                "plan_id" => 9,
                "city_id" => 1
            ),
            array(
                "user_id" => 9409,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3230,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3812,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 6423,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 9476,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 8248,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 6924,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7643,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7643,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9459,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8255,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9635,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6002,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 10,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7802,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7802,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7802,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6765,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5475,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9769,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9769,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5918,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5966,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5966,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6038,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6038,
                "plan_id" => 10,
                "city_id" => 67
            ),
            array(
                "user_id" => 5848,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6494,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9753,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9753,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6775,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 5885,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8038,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8095,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8002,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8777,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8447,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7103,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8190,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5376,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5376,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 5376,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6543,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6398,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6285,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6285,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 9508,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6302,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 4397,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6400,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9316,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6110,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6110,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6110,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6119,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6119,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6114,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6727,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9111,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6721,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9175,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6748,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8802,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9631,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9726,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9726,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9727,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9727,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9724,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9724,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8013,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8013,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9764,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9750,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9821,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9745,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9745,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9681,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 90,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5854,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6883,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6883,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8798,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8798,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8798,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8996,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9036,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9065,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9370,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5037,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9728,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9728,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8504,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 7675,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8335,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8335,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6984,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9800,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9765,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 5717,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9642,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9804,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9385,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 7939,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9803,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9818,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9756,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8345,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9826,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9771,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9796,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9810,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8636,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6106,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8973,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8973,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8978,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8978,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9015,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8856,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9092,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9497,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 5444,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6390,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8881,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 9655,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8769,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9687,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 5042,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9746,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6459,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6399,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6580,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6549,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6628,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6600,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9158,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6653,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9328,
                "plan_id" => 10,
                "city_id" => 80
            ),
            array(
                "user_id" => 8941,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6307,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6021,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6491,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9251,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9657,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 9657,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9657,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6462,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9256,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6463,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6297,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6393,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9766,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6433,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9781,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9794,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9312,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9164,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9807,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9808,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 9816,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 4735,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5399,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 3482,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8381,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8381,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7761,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 3230,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9409,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 4068,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9669,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9669,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6927,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5333,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5196,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8776,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8794,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8694,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 4800,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6211,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6135,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8081,
                "plan_id" => 10,
                "city_id" => 6
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 10,
                "city_id" => 6
            ),
            array(
                "user_id" => 8088,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 3508,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 9344,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9344,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9344,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9652,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9813,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 5789,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6966,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6490,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6490,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6300,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6299,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6403,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 3820,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 4314,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9458,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7175,
                "plan_id" => 10,
                "city_id" => 167
            ),
            array(
                "user_id" => 9232,
                "plan_id" => 10,
                "city_id" => 80
            ),
            array(
                "user_id" => 7596,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7596,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6749,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6749,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5028,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7760,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 7015,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9388,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7756,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5811,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9575,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7944,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7944,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7966,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7966,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7191,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6117,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8926,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9717,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8893,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8980,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9488,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 5216,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7166,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7754,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9705,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9705,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9787,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 3367,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9777,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9776,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9624,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9725,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9725,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9792,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 3688,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 3688,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 4599,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 4599,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9639,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 4132,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6453,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 7897,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 67
            ),
            array(
                "user_id" => 9686,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9671,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9671,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9834,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9834,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6423,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 11,
                "city_id" => 7
            ),
            array(
                "user_id" => 9476,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 11,
                "city_id" => 164
            ),
            array(
                "user_id" => 6924,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3482,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 6334,
                "plan_id" => 11,
                "city_id" => 164
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8381,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 11,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 11,
                "city_id" => 164
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9409,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3230,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 4800,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 4800,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6211,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6211,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9497,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9497,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9451,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9451,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8088,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8707,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8707,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 11,
                "city_id" => 6
            ),
            array(
                "user_id" => 8692,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 8692,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8777,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 7103,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6135,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 9139,
                "plan_id" => 11,
                "city_id" => 6
            ),
            array(
                "user_id" => 6843,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8794,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8677,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8677,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 8696,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8711,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 8190,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8856,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 11,
                "city_id" => 3
            ),
            array(
                "user_id" => 9092,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 11,
                "city_id" => 3
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 5018,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6775,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8447,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8038,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8002,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 2997,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 5475,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 5918,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3296,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 5333,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 12,
                "city_id" => 7
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 3482,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 6334,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 9323,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 4068,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 12,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 12,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 12,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6210,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 12,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6713,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 3296,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 4894,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6568,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 9486,
                "plan_id" => 12,
                "city_id" => 6
            ),
            array(
                "user_id" => 9888,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 3360,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 9900,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 13,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6159,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6159,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 13,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 3360,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 13,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 13,
                "city_id" => 2
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 13,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 13,
                "city_id" => 1
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 13,
                "city_id" => 3
            ),
            array(
                "user_id" => 9323,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 473,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 4894,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 8325,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 13,
                "city_id" => 3
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 784,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 5196,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 5196,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 5511,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 3360,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 6568,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 9486,
                "plan_id" => 14,
                "city_id" => 6
            ),
            array(
                "user_id" => 5511,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 9213,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 6159,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 14,
                "city_id" => 12
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 14,
                "city_id" => 2
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 8853,
                "plan_id" => 14,
                "city_id" => 67
            ),
            array(
                "user_id" => 6908,
                "plan_id" => 14,
                "city_id" => 67
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 14,
                "city_id" => 167
            ),
            array(
                "user_id" => 9131,
                "plan_id" => 14,
                "city_id" => 12
            ),
            array(
                "user_id" => 9131,
                "plan_id" => 14,
                "city_id" => 167
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 14,
                "city_id" => 12
            ),
            array(
                "user_id" => 7708,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 6713,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 784,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7058,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7058,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 8342,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7585,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 10003,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9804,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9911,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9911,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9920,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9920,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9912,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9912,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9997,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9997,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 10005,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 10005,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8965,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 8965,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8968,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 8968,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8964,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 8964,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8996,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9015,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9015,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9018,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9018,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9011,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9011,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9020,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9020,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9019,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9019,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9043,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9043,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9056,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7900,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7754,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9855,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9867,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9978,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7955,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9946,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9111,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9175,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9631,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9821,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7382,
                "plan_id" => 14,
                "city_id" => 2
            ),
            array(
                "user_id" => 9981,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 8893,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 8943,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9764,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9827,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9177,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 15,
                "city_id" => 7
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 15,
                "city_id" => 3
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 15,
                "city_id" => 3
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9213,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 9272,
                "plan_id" => 15,
                "city_id" => 164
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 15,
                "city_id" => 164
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 6346,
                "plan_id" => 15,
                "city_id" => 167
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 15,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 15,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 15,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 15,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 6213,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 6658,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 10052,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 10052,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 10052,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 10064,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 16,
                "city_id" => 3
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 16,
                "city_id" => 3
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 16,
                "city_id" => 7
            ),
            array(
                "user_id" => 10081,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 7968,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 7968,
                "plan_id" => 16,
                "city_id" => 67
            ),
            array(
                "user_id" => 10064,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 9272,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 16,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 16,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 16,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 6213,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 6658,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 16,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 9033,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 10147,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 10117,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 17,
                "city_id" => 3
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 17,
                "city_id" => 7
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 17,
                "city_id" => 164
            ),
            array(
                "user_id" => 10147,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 9033,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 10090,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 17,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 17,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 6213,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 10200,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 10232,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 5432,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 7777,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10134,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 10090,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 18,
                "city_id" => 3
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 18,
                "city_id" => 7
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 6908,
                "plan_id" => 18,
                "city_id" => 67
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 18,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9077,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 18,
                "city_id" => 7
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 18,
                "city_id" => 7
            ),
            array(
                "user_id" => 9981,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 10060,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 9245,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 4570,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 6626,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 9151,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 10114,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10115,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10153,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 3263,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 19,
                "city_id" => 164
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 19,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 7245,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 7245,
                "plan_id" => 19,
                "city_id" => 67
            ),
            array(
                "user_id" => 3812,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 3263,
                "plan_id" => 19,
                "city_id" => 10
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 19,
                "city_id" => 164
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 19,
                "city_id" => 7
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10235,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10230,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 4570,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10217,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10238,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10115,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10114,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10145,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10137,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 10153,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10204,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 9245,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 9191,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 9191,
                "plan_id" => 19,
                "city_id" => 6
            ),
            array(
                "user_id" => 8857,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8857,
                "plan_id" => 19,
                "city_id" => 6
            ),
            array(
                "user_id" => 9077,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 10344,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 20,
                "city_id" => 164
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 9077,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 20,
                "city_id" => 7
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10344,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 20,
                "city_id" => 164
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 20,
                "city_id" => 1
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10228,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10228,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10234,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10234,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10301,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10301,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10334,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10334,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10337,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10337,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10341,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10341,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10343,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10343,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10280,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10280,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9301,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 9786,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10089,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10089,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 8021,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10126,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10126,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10162,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10198,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 8299,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 8950,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10351,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10377,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9919,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10039,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10067,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10067,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9961,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10151,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10169,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10254,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10254,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6522,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 5252,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 9292,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 8638,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6545,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10335,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10335,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 20,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 8482,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 5887,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 8771,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 21
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 21
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 21,
                "city_id" => 7
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 21,
                "city_id" => 2
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 21,
                "city_id" => 67
            ),
            array(
                "user_id" => 8482,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10458,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10467,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10516,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7264,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 7264,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 21,
                "city_id" => 67
            ),
            array(
                "user_id" => 10354,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10354,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10354,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10320,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10325,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10317,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10317,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10317,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10304,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10304,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 3745,
                "plan_id" => 21,
                "city_id" => 2
            ),
            array(
                "user_id" => 3745,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 21,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10541,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10557,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 22
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 22
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 22,
                "city_id" => 2
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 22,
                "city_id" => 7
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 22,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 9641,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 22,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 10541,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 5838,
                "plan_id" => 22,
                "city_id" => 164
            ),
            array(
                "user_id" => 10467,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 22,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 22,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 22,
                "city_id" => 67
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 10534,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 23
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 23
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 23,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 7442,
                "plan_id" => 23,
                "city_id" => 12
            ),
            array(
                "user_id" => 9641,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 23,
                "city_id" => 12
            ),
            array(
                "user_id" => 10467,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10594,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10644,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 24
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 24
            ),
            array(
                "user_id" => 10699,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10670,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10514,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10519,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 10600,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 10624,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10629,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10630,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10688,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10594,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10114,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8975,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9055,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10115,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10009,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9919,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10251,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8405,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 5121,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9027,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8785,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8785,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10252,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8756,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10169,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10008,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5990,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 5252,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 90,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10530,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5070,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9442,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10698,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10693,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10695,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10694,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4053,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 7891,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6250,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10517,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10221,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10691,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10678,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9125,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9998,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9393,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4673,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 4673,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8888,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8888,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8342,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 7395,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10036,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 10036,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 4866,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 7589,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 7589,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5805,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 4866,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6785,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10717,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10721,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 10011,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10220,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10509,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10550,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10587,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10587,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10588,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10684,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8694,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10722,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4336,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9758,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 135,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10735,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 5457,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8109,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9829,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8194,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8194,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8194,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 8262,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 7430,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 8610,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10642,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10642,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 5319,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10315,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10345,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10345,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7103,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10028,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6018,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8446,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10469,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8902,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10495,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10495,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10093,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 6734,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 10646,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9446,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 10638,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10650,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5766,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8356,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10637,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10574,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10574,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10291,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10668,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8313,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10681,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10689,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6109,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 5976,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7765,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8571,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6484,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 10733,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6340,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6340,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10736,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9145,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6766,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10023,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9929,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 5405,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5405,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9163,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9550,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6228,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6618,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8523,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 5053,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7854,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10138,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9816,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10739,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10739,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10741,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6718,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10640,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10697,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10707,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 9041,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9042,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6630,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6750,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6315,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7284,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10700,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5450,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9016,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8998,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10716,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10554,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10250,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10248,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10247,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10246,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10249,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8955,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 8955,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10439,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7264,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10297,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10673,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6437,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 9051,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9051,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9553,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10726,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10704,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10691,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10644,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6785,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10717,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10670,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 25,
                "city_id" => 3
            ),
            array(
                "user_id" => 10726,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 9553,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 7891,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 6250,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 25,
                "city_id" => 67
            ),
            array(
                "user_id" => 8925,
                "plan_id" => 25,
                "city_id" => 1
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10251,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10248,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10249,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6750,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6630,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6718,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 10439,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 5450,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 5805,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8342,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10721,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 5895,
                "plan_id" => 25,
                "city_id" => 164
            ),
            array(
                "user_id" => 7591,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8028,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 25,
                "city_id" => 3
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 25,
                "city_id" => 1
            ),
            array(
                "user_id" => 6203,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6203,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6212,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 25,
                "city_id" => 6
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 25,
                "city_id" => 164
            ),
            array(
                "user_id" => 10011,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10220,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 25,
                "city_id" => 1
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 25,
                "city_id" => 7
            ),
            array(
                "user_id" => 10509,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10550,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10588,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10588,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 4726,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10597,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10684,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10766,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 3375,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 3375,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10514,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10519,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10600,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10624,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10629,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10630,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10688,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8975,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9055,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8405,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9027,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10252,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8756,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10169,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5990,
                "plan_id" => 25
            ),
            array(
                "user_id" => 90,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10530,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5070,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9442,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10698,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10693,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10695,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10694,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10221,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10678,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9998,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9393,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8888,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10722,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 25
            ),
            array(
                "user_id" => 4336,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9758,
                "plan_id" => 25
            ),
            array(
                "user_id" => 135,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8109,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8262,
                "plan_id" => 25
            ),
            array(
                "user_id" => 7430,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8610,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10642,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5319,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10028,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6018,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8446,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10469,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8902,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10093,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6734,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9446,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10638,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10650,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8356,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10637,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10574,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10291,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10668,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8313,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10681,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10689,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6109,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5976,
                "plan_id" => 25
            ),
            array(
                "user_id" => 7765,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8571,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6484,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10733,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6340,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10736,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9145,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6766,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10023,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9929,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5405,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9163,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9550,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6228,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6618,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8523,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5053,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10138,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10640,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10697,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10707,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9041,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9042,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10700,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9016,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8998,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10716,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10554,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10250,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10247,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10246,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10673,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6437,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10753,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 5280,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 5326,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6984,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10732,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8293,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 9301,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10760,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10781,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10643,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 9219,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10756,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10756,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 180,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10818,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 10818,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 4402,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6652,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6785,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10717,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10670,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10726,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9553,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 26
            ),
            array(
                "user_id" => 7891,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6250,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8925,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10251,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10248,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10249,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6750,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6630,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6718,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5450,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8805,
                "plan_id" => 26,
                "city_id" => 164
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8771,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 5805,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4624,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10721,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8028,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 26,
                "city_id" => 3
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6203,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6212,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10011,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10220,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10509,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4726,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10597,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10684,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10766,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10514,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10519,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10600,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10629,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10630,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8975,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9055,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9027,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10252,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 90,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5070,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9442,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10698,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10693,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10695,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10694,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10678,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 9393,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10722,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4336,
                "plan_id" => 26
            ),
            array(
                "user_id" => 135,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8262,
                "plan_id" => 26
            ),
            array(
                "user_id" => 7430,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8610,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5319,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6018,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10469,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8902,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6734,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10638,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10291,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8313,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10681,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10689,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8571,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6484,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10736,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9929,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9163,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6228,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6618,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8523,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10138,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10640,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10707,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9041,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9042,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10700,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9016,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8998,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10716,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10250,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10247,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10246,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10673,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10753,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5280,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8293,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10760,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10781,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10756,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4402,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6652,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10580,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10792,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 7589,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 1782,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10071,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 1913,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10869,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 6765,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10685,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10685,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8447,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8886,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 8886,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10853,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10843,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 6740,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8114,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 9722,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 7682,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8344,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10807,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10807,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10751,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9013,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9013,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8799,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 8162,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 5037,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10852,
                "plan_id" => 26,
                "city_id" => 7
            ),
            array(
                "user_id" => 10769,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10769,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10765,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10765,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10793,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10797,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10797,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 9934,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10832,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10832,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10808,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10808,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10841,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10841,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10811,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10811,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10851,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10851,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10160,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10824,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10824,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10815,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10815,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10815,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6575,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 6575,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6575,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10868,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10868,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10844,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10867,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9167,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 6767,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10860,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10860,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8784,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10863,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10859,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10859,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10168,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10168,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6661,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10545,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 9523,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9527,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9541,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9542,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9569,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9543,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9543,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6649,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 9534,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9534,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 9536,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9536,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10315,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10419,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10455,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10462,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10518,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10553,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10553,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10577,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10576,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10623,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10009,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10008,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10421,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10437,
                "plan_id" => 26,
                "city_id" => 10
            )
        );


        $arr = array(
            array(
                "user_id" => 6845,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 5333,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 7708,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 5811,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7015,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8405,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7609,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7596,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 8937,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8028,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7191,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7191,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9663,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5037,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 9,
                "city_id" => 1
            ),
            array(
                "user_id" => 8694,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6843,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8088,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8768,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9264,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 9
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 9,
                "city_id" => 11
            ),
            array(
                "user_id" => 6775,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 4062,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9701,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9720,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7067,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8002,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8777,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8095,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5475,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8042,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7343,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 8597,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5885,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 8038,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 4976,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9769,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 9,
                "city_id" => 6
            ),
            array(
                "user_id" => 6423,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 9,
                "city_id" => 7
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 9,
                "city_id" => 3
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 9,
                "city_id" => 7
            ),
            array(
                "user_id" => 9476,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 8522,
                "plan_id" => 9,
                "city_id" => 167
            ),
            array(
                "user_id" => 8254,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 4328,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 9,
                "city_id" => 164
            ),
            array(
                "user_id" => 8248,
                "plan_id" => 9,
                "city_id" => 3
            ),
            array(
                "user_id" => 6924,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 5608,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 9459,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 8255,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9635,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 9,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3418,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 3418,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 2
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9516,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 9625,
                "plan_id" => 9,
                "city_id" => 1
            ),
            array(
                "user_id" => 9409,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3230,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 3812,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 9,
                "city_id" => 8
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 6423,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 9476,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 8248,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 6924,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7643,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7643,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9459,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9520,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8255,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9635,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6002,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 10,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7802,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7802,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7802,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6765,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9444,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5475,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9769,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9769,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5918,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5966,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5966,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6038,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6038,
                "plan_id" => 10,
                "city_id" => 67
            ),
            array(
                "user_id" => 5848,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6494,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9753,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9753,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9399,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6775,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 5885,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8038,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8095,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8002,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8777,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8447,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7103,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8190,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5376,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5376,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 5376,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6543,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6398,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6285,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6285,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 9508,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6302,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 4397,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6400,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9316,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6110,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6110,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6110,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6119,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6119,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6114,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6727,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9111,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6721,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9175,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6748,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8802,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9631,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9726,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9726,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9727,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9727,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9724,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9724,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8013,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8013,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9764,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9750,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9821,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9745,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9745,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9681,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 90,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 5854,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6883,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6883,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8798,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8798,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8798,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8996,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9036,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9065,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9370,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5037,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9728,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9728,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8504,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 7675,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8335,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8335,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6984,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9800,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9765,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 5717,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9642,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9804,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9385,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 7939,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9803,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9818,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9756,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8345,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9826,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9771,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9796,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9810,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8636,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6106,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8973,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8973,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8978,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8978,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9015,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8856,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9092,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9497,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 5444,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6390,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9622,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8881,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 9655,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8769,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9687,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 5042,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9746,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6459,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6399,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6580,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6549,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6628,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6600,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9158,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6653,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9328,
                "plan_id" => 10,
                "city_id" => 80
            ),
            array(
                "user_id" => 8941,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6307,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6021,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6491,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9251,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9657,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 9657,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9657,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6462,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9256,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6463,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6297,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6393,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9766,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6433,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9781,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9794,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9312,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9164,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9807,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9808,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 9816,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 4735,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5399,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 3482,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 8381,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8381,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7761,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 3230,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9409,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 4068,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9669,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9669,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6927,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5333,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5196,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8776,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8794,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8694,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 4800,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6211,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6135,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8081,
                "plan_id" => 10,
                "city_id" => 6
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 10,
                "city_id" => 6
            ),
            array(
                "user_id" => 8088,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 3508,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 9344,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9344,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9344,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9652,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 9813,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 5789,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 6966,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6490,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6490,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6300,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6299,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 6403,
                "plan_id" => 10,
                "city_id" => 164
            ),
            array(
                "user_id" => 3820,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 4314,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9458,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7175,
                "plan_id" => 10,
                "city_id" => 167
            ),
            array(
                "user_id" => 9232,
                "plan_id" => 10,
                "city_id" => 80
            ),
            array(
                "user_id" => 7596,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7596,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6749,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 6749,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5028,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 7760,
                "plan_id" => 10,
                "city_id" => 12
            ),
            array(
                "user_id" => 7015,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9388,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7756,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 5811,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9575,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7944,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7944,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7966,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 7966,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7191,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6117,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8926,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9717,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 8893,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 8980,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9488,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 5216,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 7166,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 7754,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9705,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9705,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9787,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 3367,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9777,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9776,
                "plan_id" => 10,
                "city_id" => 3
            ),
            array(
                "user_id" => 9624,
                "plan_id" => 10,
                "city_id" => 2
            ),
            array(
                "user_id" => 9725,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9725,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 9792,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 3688,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 3688,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 4599,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 4599,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9639,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 4132,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6453,
                "plan_id" => 10,
                "city_id" => 1
            ),
            array(
                "user_id" => 7897,
                "plan_id" => 10,
                "city_id" => 7
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6175,
                "plan_id" => 10,
                "city_id" => 67
            ),
            array(
                "user_id" => 9686,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9671,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9671,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 9834,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 9834,
                "plan_id" => 10,
                "city_id" => 10
            ),
            array(
                "user_id" => 6423,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 11,
                "city_id" => 7
            ),
            array(
                "user_id" => 9476,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 7840,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 11,
                "city_id" => 164
            ),
            array(
                "user_id" => 6924,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3482,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 6334,
                "plan_id" => 11,
                "city_id" => 164
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9327,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8381,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 11,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 11,
                "city_id" => 164
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9409,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3230,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8464,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9762,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9822,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 6841,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 1437,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 4800,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 4800,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6884,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9333,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6211,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6211,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6218,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 9497,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 9497,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9451,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9451,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6196,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8088,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8707,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8707,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 11,
                "city_id" => 2
            ),
            array(
                "user_id" => 8084,
                "plan_id" => 11,
                "city_id" => 6
            ),
            array(
                "user_id" => 8692,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 8692,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8480,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8362,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9103,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 6842,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8777,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 7103,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6152,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6135,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 9139,
                "plan_id" => 11,
                "city_id" => 6
            ),
            array(
                "user_id" => 6843,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8794,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8677,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8677,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 11,
                "city_id" => 1
            ),
            array(
                "user_id" => 8696,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8711,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 11,
                "city_id" => 12
            ),
            array(
                "user_id" => 8190,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8856,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 11,
                "city_id" => 3
            ),
            array(
                "user_id" => 9092,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 11,
                "city_id" => 3
            ),
            array(
                "user_id" => 8681,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 5018,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 6775,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8447,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 8038,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 8002,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 2997,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 9261,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 5475,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 9778,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 5918,
                "plan_id" => 11,
                "city_id" => 13
            ),
            array(
                "user_id" => 3296,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 5333,
                "plan_id" => 11,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 12,
                "city_id" => 7
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 3482,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 6334,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 9323,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 7244,
                "plan_id" => 12,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 4068,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 12,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 12,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 12,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6210,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 12,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6713,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 12,
                "city_id" => 13
            ),
            array(
                "user_id" => 3296,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 4894,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 12,
                "city_id" => 10
            ),
            array(
                "user_id" => 6568,
                "plan_id" => 12,
                "city_id" => 164
            ),
            array(
                "user_id" => 9486,
                "plan_id" => 12,
                "city_id" => 6
            ),
            array(
                "user_id" => 9888,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 3360,
                "plan_id" => 12,
                "city_id" => 8
            ),
            array(
                "user_id" => 9900,
                "plan_id" => 12,
                "city_id" => 2
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 13,
                "city_id" => 6
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 8252,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 4079,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6159,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6159,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 13,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 3360,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 7287,
                "plan_id" => 13,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 3317,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 13,
                "city_id" => 2
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 13,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 13,
                "city_id" => 1
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6838,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 6907,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 13,
                "city_id" => 3
            ),
            array(
                "user_id" => 9323,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 7584,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 473,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 473,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 4894,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 6214,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8710,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 8325,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 13,
                "city_id" => 12
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 8846,
                "plan_id" => 13,
                "city_id" => 10
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 13,
                "city_id" => 3
            ),
            array(
                "user_id" => 6204,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 784,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 5196,
                "plan_id" => 13,
                "city_id" => 8
            ),
            array(
                "user_id" => 5196,
                "plan_id" => 13,
                "city_id" => 13
            ),
            array(
                "user_id" => 5511,
                "plan_id" => 13,
                "city_id" => 164
            ),
            array(
                "user_id" => 3360,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 6568,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 9486,
                "plan_id" => 14,
                "city_id" => 6
            ),
            array(
                "user_id" => 5511,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 9213,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 6159,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 14,
                "city_id" => 12
            ),
            array(
                "user_id" => 5697,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 14,
                "city_id" => 2
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 8853,
                "plan_id" => 14,
                "city_id" => 67
            ),
            array(
                "user_id" => 6908,
                "plan_id" => 14,
                "city_id" => 67
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 14,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 14,
                "city_id" => 167
            ),
            array(
                "user_id" => 9131,
                "plan_id" => 14,
                "city_id" => 12
            ),
            array(
                "user_id" => 9131,
                "plan_id" => 14,
                "city_id" => 167
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 14,
                "city_id" => 12
            ),
            array(
                "user_id" => 7708,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 7581,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 6713,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 784,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7058,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7058,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 14,
                "city_id" => 164
            ),
            array(
                "user_id" => 8342,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7585,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 10003,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9804,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9911,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9911,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9920,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9920,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9912,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9912,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9997,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9997,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 10005,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 10005,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8965,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 8965,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8968,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 8968,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8964,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 8964,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 8996,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9015,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9015,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9018,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9018,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9011,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9011,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9020,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9020,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9019,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9019,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9043,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9043,
                "plan_id" => 14,
                "city_id" => 10
            ),
            array(
                "user_id" => 9056,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 7900,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7754,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9855,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9867,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9978,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7955,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9946,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9111,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9175,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9631,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9821,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7382,
                "plan_id" => 14,
                "city_id" => 2
            ),
            array(
                "user_id" => 9981,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 8893,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 8943,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9764,
                "plan_id" => 14,
                "city_id" => 8
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9827,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 9177,
                "plan_id" => 14,
                "city_id" => 13
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 15,
                "city_id" => 7
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 15,
                "city_id" => 3
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 15,
                "city_id" => 3
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9213,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 1
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 9511,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 9272,
                "plan_id" => 15,
                "city_id" => 164
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 7626,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 15,
                "city_id" => 164
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 6346,
                "plan_id" => 15,
                "city_id" => 167
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 15,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 15,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 15,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 15,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 6213,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 6658,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 15,
                "city_id" => 12
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 15,
                "city_id" => 2
            ),
            array(
                "user_id" => 10052,
                "plan_id" => 15,
                "city_id" => 8
            ),
            array(
                "user_id" => 10052,
                "plan_id" => 15,
                "city_id" => 10
            ),
            array(
                "user_id" => 10052,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 10064,
                "plan_id" => 15,
                "city_id" => 13
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 16,
                "city_id" => 3
            ),
            array(
                "user_id" => 9396,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 16,
                "city_id" => 3
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 16,
                "city_id" => 7
            ),
            array(
                "user_id" => 10081,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 7968,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 7968,
                "plan_id" => 16,
                "city_id" => 67
            ),
            array(
                "user_id" => 10064,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 9495,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 9272,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 6410,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 9455,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 16,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 16,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 16,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 6213,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 16,
                "city_id" => 8
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 16,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 6658,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 16,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 16,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 9033,
                "plan_id" => 16,
                "city_id" => 12
            ),
            array(
                "user_id" => 10147,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 10117,
                "plan_id" => 16,
                "city_id" => 13
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 16,
                "city_id" => 164
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 17,
                "city_id" => 3
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 17,
                "city_id" => 7
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 17,
                "city_id" => 164
            ),
            array(
                "user_id" => 10147,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 9033,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6449,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 10090,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 4782,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 17,
                "city_id" => 164
            ),
            array(
                "user_id" => 8650,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 17,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 6213,
                "plan_id" => 17,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 17,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 17,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 17,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 17,
                "city_id" => 12
            ),
            array(
                "user_id" => 10200,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 10232,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 5432,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 7777,
                "plan_id" => 17,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8435,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 7895,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 8169,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10134,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 10090,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 18,
                "city_id" => 3
            ),
            array(
                "user_id" => 7952,
                "plan_id" => 18,
                "city_id" => 7
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 6908,
                "plan_id" => 18,
                "city_id" => 67
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 18,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 18,
                "city_id" => 164
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9077,
                "plan_id" => 18,
                "city_id" => 12
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 18,
                "city_id" => 7
            ),
            array(
                "user_id" => 9426,
                "plan_id" => 18,
                "city_id" => 7
            ),
            array(
                "user_id" => 9981,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 10060,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 9245,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 4570,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 6626,
                "plan_id" => 18,
                "city_id" => 1
            ),
            array(
                "user_id" => 9151,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 18,
                "city_id" => 8
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 10114,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10115,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 10153,
                "plan_id" => 18,
                "city_id" => 2
            ),
            array(
                "user_id" => 3263,
                "plan_id" => 18,
                "city_id" => 10
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 18,
                "city_id" => 13
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 19,
                "city_id" => 164
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 8077,
                "plan_id" => 19,
                "city_id" => 167
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 9654,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 10
            ),
            array(
                "user_id" => 6885,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 7245,
                "plan_id" => 19,
                "city_id" => 1
            ),
            array(
                "user_id" => 7245,
                "plan_id" => 19,
                "city_id" => 67
            ),
            array(
                "user_id" => 3812,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 3263,
                "plan_id" => 19,
                "city_id" => 10
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 5738,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 19,
                "city_id" => 164
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 8474,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 19,
                "city_id" => 7
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10235,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10230,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 4570,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10217,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10238,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10115,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10114,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10145,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10137,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 10153,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10204,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 9245,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 9945,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 9191,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 9191,
                "plan_id" => 19,
                "city_id" => 6
            ),
            array(
                "user_id" => 8857,
                "plan_id" => 19,
                "city_id" => 2
            ),
            array(
                "user_id" => 8857,
                "plan_id" => 19,
                "city_id" => 6
            ),
            array(
                "user_id" => 9077,
                "plan_id" => 19,
                "city_id" => 12
            ),
            array(
                "user_id" => 10344,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 19,
                "city_id" => 13
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 19,
                "city_id" => 8
            ),
            array(
                "user_id" => 8465,
                "plan_id" => 20,
                "city_id" => 164
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 9077,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 3379,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 20,
                "city_id" => 7
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10344,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 9187,
                "plan_id" => 20,
                "city_id" => 164
            ),
            array(
                "user_id" => 9510,
                "plan_id" => 20,
                "city_id" => 1
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10228,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10228,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10234,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10234,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10301,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10301,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10334,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10334,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10337,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10337,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10341,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10341,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10343,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10343,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10280,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10280,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9301,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 9786,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10089,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10089,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 8021,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10126,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10126,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10162,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10198,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9674,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 8299,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 8950,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10351,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10377,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9919,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10039,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10067,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10067,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 9961,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 9990,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 10151,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10169,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10254,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10254,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6522,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 5252,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 9292,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 8638,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6545,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 10335,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 10335,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6553,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 20,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 20,
                "city_id" => 1
            ),
            array(
                "user_id" => 5890,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 8275,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 8482,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 5887,
                "plan_id" => 20,
                "city_id" => 2
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 20,
                "city_id" => 12
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 20,
                "city_id" => 8
            ),
            array(
                "user_id" => 8771,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 20,
                "city_id" => 13
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 21
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 21
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 21,
                "city_id" => 7
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 21,
                "city_id" => 2
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 7725,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 6578,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 9389,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7323,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 21,
                "city_id" => 67
            ),
            array(
                "user_id" => 8482,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10458,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10467,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10516,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 21,
                "city_id" => 12
            ),
            array(
                "user_id" => 7264,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 7264,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 21,
                "city_id" => 67
            ),
            array(
                "user_id" => 10354,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10354,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10354,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10320,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10325,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10317,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10317,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10317,
                "plan_id" => 21,
                "city_id" => 13
            ),
            array(
                "user_id" => 10304,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10304,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 3745,
                "plan_id" => 21,
                "city_id" => 2
            ),
            array(
                "user_id" => 3745,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 21,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 10541,
                "plan_id" => 21,
                "city_id" => 10
            ),
            array(
                "user_id" => 10557,
                "plan_id" => 21,
                "city_id" => 8
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 22
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 22
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 22,
                "city_id" => 2
            ),
            array(
                "user_id" => 7025,
                "plan_id" => 22,
                "city_id" => 7
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 10359,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 10367,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 22,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 9641,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 22,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 10541,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 5838,
                "plan_id" => 22,
                "city_id" => 164
            ),
            array(
                "user_id" => 10467,
                "plan_id" => 22,
                "city_id" => 13
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 22,
                "city_id" => 10
            ),
            array(
                "user_id" => 6645,
                "plan_id" => 22,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 22,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 22,
                "city_id" => 67
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 10534,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 22,
                "city_id" => 8
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 23
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 23
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 23,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 7442,
                "plan_id" => 23,
                "city_id" => 12
            ),
            array(
                "user_id" => 9641,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 23,
                "city_id" => 10
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 23,
                "city_id" => 12
            ),
            array(
                "user_id" => 10467,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 10594,
                "plan_id" => 23,
                "city_id" => 8
            ),
            array(
                "user_id" => 10644,
                "plan_id" => 23,
                "city_id" => 13
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 24
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 24
            ),
            array(
                "user_id" => 10699,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9382,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10670,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10514,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10519,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 10600,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 10624,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10629,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10630,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10688,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10311,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10594,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10114,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8975,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9055,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10115,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10009,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9919,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10251,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8405,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 5121,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9027,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8785,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8785,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10252,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8756,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10169,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10008,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5990,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 5252,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 90,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10530,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5070,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9442,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10698,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10693,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10695,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10694,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4053,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 7891,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6250,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10517,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10221,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10691,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10678,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9125,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9998,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9393,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4673,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 4673,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8888,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8888,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8967,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8342,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 7395,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10036,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 10036,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 4866,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 7589,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 7589,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5805,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 4866,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6785,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10717,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10721,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 10011,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10220,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10509,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10550,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10587,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10587,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10588,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10684,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8694,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10722,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 4336,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9758,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 135,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10735,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 5457,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8109,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9829,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8194,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8194,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8194,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 8262,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 7430,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 8610,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10642,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10642,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 5319,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10315,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10345,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10345,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7103,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10028,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6018,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8446,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10469,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8902,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10495,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10495,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10093,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 6734,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 10646,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9446,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 10638,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10650,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5766,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8356,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10637,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10574,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10574,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10291,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10668,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8313,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10681,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10689,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6109,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 5976,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7765,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8571,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6484,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 10733,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6340,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6340,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10736,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 9145,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6766,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10023,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9929,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 5405,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5405,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9163,
                "plan_id" => 24,
                "city_id" => 164
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 1
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9550,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6228,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6618,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 8523,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 24,
                "city_id" => 7
            ),
            array(
                "user_id" => 5053,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7854,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10138,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 9816,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10739,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10739,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10741,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 6718,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10640,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10697,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10707,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 9041,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9042,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6630,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6750,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 6315,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7284,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10700,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 5450,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 9016,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8998,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10716,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10554,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10250,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10248,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10247,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10246,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 10249,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 8955,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 8955,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10439,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 7264,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 10297,
                "plan_id" => 24,
                "city_id" => 12
            ),
            array(
                "user_id" => 10673,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 6437,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 9051,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9051,
                "plan_id" => 24,
                "city_id" => 10
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 24,
                "city_id" => 8
            ),
            array(
                "user_id" => 9553,
                "plan_id" => 24,
                "city_id" => 2
            ),
            array(
                "user_id" => 10726,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 10704,
                "plan_id" => 24,
                "city_id" => 13
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 24,
                "city_id" => 3
            ),
            array(
                "user_id" => 6123,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10427,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10691,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6272,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10644,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6785,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10717,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10385,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8256,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6896,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6665,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10670,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 25,
                "city_id" => 3
            ),
            array(
                "user_id" => 10726,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 9553,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 7891,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 6250,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 7315,
                "plan_id" => 25,
                "city_id" => 67
            ),
            array(
                "user_id" => 8925,
                "plan_id" => 25,
                "city_id" => 1
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10251,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10248,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10249,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6750,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6630,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6718,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 10439,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 5450,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 5805,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8342,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10721,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 5895,
                "plan_id" => 25,
                "city_id" => 164
            ),
            array(
                "user_id" => 7591,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8028,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 25,
                "city_id" => 3
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 25,
                "city_id" => 1
            ),
            array(
                "user_id" => 6203,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6203,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 6212,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 25,
                "city_id" => 6
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 25,
                "city_id" => 164
            ),
            array(
                "user_id" => 10011,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10220,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 25,
                "city_id" => 1
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 25,
                "city_id" => 7
            ),
            array(
                "user_id" => 10509,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10550,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10588,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10588,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 4726,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10597,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10684,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10766,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 3375,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 3375,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 9683,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10514,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10519,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10600,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10624,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10629,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10630,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10688,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8975,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9055,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8604,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8405,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9027,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10252,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8756,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10169,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5990,
                "plan_id" => 25
            ),
            array(
                "user_id" => 90,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10530,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5070,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9442,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10698,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10693,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10695,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10694,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10221,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10678,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10307,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9998,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9393,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8888,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10227,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10722,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 25
            ),
            array(
                "user_id" => 4336,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9758,
                "plan_id" => 25
            ),
            array(
                "user_id" => 135,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8109,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8262,
                "plan_id" => 25
            ),
            array(
                "user_id" => 7430,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8610,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10642,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5319,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10028,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6018,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6642,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8446,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10469,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8902,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10093,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6734,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9446,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10638,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10650,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8356,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10637,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10574,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10291,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10668,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8313,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10681,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10689,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6109,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5976,
                "plan_id" => 25
            ),
            array(
                "user_id" => 7765,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8571,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6484,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10733,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6340,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10736,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9145,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6766,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10023,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9929,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5405,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9163,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9550,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6228,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6618,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8523,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 25
            ),
            array(
                "user_id" => 5053,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10138,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10640,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10697,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10707,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9041,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9042,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10700,
                "plan_id" => 25
            ),
            array(
                "user_id" => 9016,
                "plan_id" => 25
            ),
            array(
                "user_id" => 8998,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10716,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10554,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10250,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10247,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10246,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10673,
                "plan_id" => 25
            ),
            array(
                "user_id" => 6437,
                "plan_id" => 25
            ),
            array(
                "user_id" => 10753,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 5280,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 5326,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 6984,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10732,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 8293,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 9301,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 10760,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10781,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 10643,
                "plan_id" => 25,
                "city_id" => 13
            ),
            array(
                "user_id" => 9219,
                "plan_id" => 25,
                "city_id" => 12
            ),
            array(
                "user_id" => 10756,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10756,
                "plan_id" => 25,
                "city_id" => 10
            ),
            array(
                "user_id" => 180,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10818,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 10818,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 4402,
                "plan_id" => 25,
                "city_id" => 8
            ),
            array(
                "user_id" => 6652,
                "plan_id" => 25,
                "city_id" => 2
            ),
            array(
                "user_id" => 10496,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6785,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6223,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10717,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10520,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10593,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10601,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10608,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10605,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10670,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5994,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8463,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10726,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8418,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9553,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5865,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10543,
                "plan_id" => 26
            ),
            array(
                "user_id" => 7891,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6250,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8925,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4657,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10251,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10248,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10249,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6750,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6630,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10303,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9587,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6718,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6242,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10511,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10272,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10240,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5450,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8805,
                "plan_id" => 26,
                "city_id" => 164
            ),
            array(
                "user_id" => 8693,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8771,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 5805,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 8690,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4624,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10721,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8028,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8701,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8709,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8712,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8717,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8834,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8870,
                "plan_id" => 26,
                "city_id" => 3
            ),
            array(
                "user_id" => 6130,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6203,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6212,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8392,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10011,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10220,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8699,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4526,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10509,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4726,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10597,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6901,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10684,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10766,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10514,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10519,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10600,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10629,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10630,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10508,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10416,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8975,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9055,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10209,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10164,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9027,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10252,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8726,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 90,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5070,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9442,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10698,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10693,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10695,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10694,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6495,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10678,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10322,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 9393,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8127,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10665,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10183,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10191,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10189,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10178,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10184,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10187,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10473,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10179,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10186,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10182,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10270,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10290,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10288,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10349,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10722,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8727,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4336,
                "plan_id" => 26
            ),
            array(
                "user_id" => 135,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6414,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8262,
                "plan_id" => 26
            ),
            array(
                "user_id" => 7430,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8610,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5319,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8098,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6406,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6018,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10469,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8902,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6408,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6734,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8868,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10638,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10291,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10110,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8313,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10676,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10681,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6382,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10689,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8571,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6484,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6583,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10736,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9929,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9163,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5438,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6228,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6618,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8523,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8238,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10138,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10730,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10740,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10640,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10707,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9041,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9042,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10700,
                "plan_id" => 26
            ),
            array(
                "user_id" => 9016,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8998,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10716,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10250,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10247,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10246,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10673,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10753,
                "plan_id" => 26
            ),
            array(
                "user_id" => 5280,
                "plan_id" => 26
            ),
            array(
                "user_id" => 8293,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 5871,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10760,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10781,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10281,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10336,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10756,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10205,
                "plan_id" => 26
            ),
            array(
                "user_id" => 4402,
                "plan_id" => 26
            ),
            array(
                "user_id" => 6652,
                "plan_id" => 26
            ),
            array(
                "user_id" => 10580,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10792,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 7589,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 1782,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10071,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 1913,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10869,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 6765,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10685,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10685,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8447,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8886,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 8886,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10853,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10843,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 6740,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8114,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 9722,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 7682,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8344,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10807,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10807,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10751,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9013,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9013,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8799,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 8162,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 5037,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10852,
                "plan_id" => 26,
                "city_id" => 7
            ),
            array(
                "user_id" => 10769,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10769,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10765,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10765,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10793,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10797,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10797,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 9934,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10832,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10832,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10808,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10808,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10841,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10841,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10811,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10811,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10851,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10851,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10160,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10824,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10824,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10815,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10815,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10815,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 8951,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10456,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6575,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 6575,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6575,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10868,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10868,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10844,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10867,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9167,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 6767,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10860,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10860,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 8784,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10863,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10859,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10859,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10168,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10168,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6661,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 10545,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 9523,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9527,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9541,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9542,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9569,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 9543,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9543,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 6649,
                "plan_id" => 26,
                "city_id" => 12
            ),
            array(
                "user_id" => 9534,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9534,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 9536,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 9536,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10315,
                "plan_id" => 26,
                "city_id" => 13
            ),
            array(
                "user_id" => 10419,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10455,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10462,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10518,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10553,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10553,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10577,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10576,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10623,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10009,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10008,
                "plan_id" => 26,
                "city_id" => 8
            ),
            array(
                "user_id" => 10421,
                "plan_id" => 26,
                "city_id" => 10
            ),
            array(
                "user_id" => 10437,
                "plan_id" => 26,
                "city_id" => 10
            )
        );
        $sun = array(
            array(
                "user_id" => 6845,
                "plan_id" => 9,
                "city_id" => 13
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 10,
                "city_id" => 8
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 10,
                "city_id" => 13
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 11,
                "city_id" => 8
            ),
            array(
                "user_id" => 6845,
                "plan_id" => 11,
                "city_id" => 13
            ),
        );
        $array = [];
        foreach ($arr as $data) {

            if (!(array_key_exists($data['user_id'], $array))) {
                $arr1 = [
                    'user_id' => $data['user_id'],
                    'plan_id' => [$data['plan_id']],
                ];
                $array[$data['user_id']] = $arr1;
            }
            if (!(in_array($data['plan_id'], $array[$data['user_id']]['plan_id']))) {
                // dd($data['plan_id']);
                $array[$data['user_id']]['plan_id'][] = $data['plan_id'];
            }
        };
        $arrayFilter = [];
        $arr5 = [];

        foreach ($arr as $data) {

            $userId = $data['user_id'];
            $planId = $data['plan_id'];
            if (array_key_exists('city_id', $data)) {

                $cityId = $data['city_id'];
            } else {
                $cityId = null;
            }


            if (!isset($arrayFilter[$userId])) {
                //  dump( "in1");
                $arrayFilter[$userId] = [
                    'user_id' => $userId,
                    'plans' => []
                ];
            }

            if (!(array_key_exists($planId, $arrayFilter[$userId]['plans']))) {
                $arrayFilter[$userId]['plans'][$planId] = [
                    'plan_id' => $planId,
                    'cities' => []
                ];
            }
            if (!(in_array($cityId, $arrayFilter[$userId]['plans'][$planId]['cities']))) {

                array_push($arrayFilter[$userId]['plans'][$planId]['cities'],  $cityId);
            }
        }
        $finalData = array_values($arrayFilter);
        //         echo '<pre>';
        //         print_r($finalData );
        //    exit;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
