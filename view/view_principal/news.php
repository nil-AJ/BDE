<div class="container-fluid">
    <h3 class="titre_new">Les dernieres news du BDE</h3>
    <nav class="nav-filtre">
        <div class="marg-new">
            <div class="container">
                <div class="row in-new">
                    <div class=" inputnew col-md-3 col-sm-6 col-lg_6 col-xl-3">
                        <label class="inserticon-fontico-new">
                            <i class="fas fa-search"></i>
                        </label>
                        <input type="text" placeholder="Title..." name="" />
                    </div>
                    <div class=" inputnew col-md-2 col-sm-6 col-lg_6 col-xl-3">
                        <label class="inserticon-fontico-new">
                            <i class="fas fa-calendar-alt"></i>
                        </label>
                        <input id="datepicker-1" class="date" placeholder="Date max" />
                    </div>
                    <div class=" inputnew col-md-2 col-sm-6 col-lg_6 col-xl-3">
                        <label class="inserticon-fontico-new">
                            <i class="fas fa-calendar-alt"></i>
                        </label>
                        <input id="datepicker-2" class="date" placeholder="Date min" />
                    </div>
                </div>


                <style>


                    /*************
                    ***************
                    ***********
                     calandar form
                     ***************
                    ***********
                    ***********/

                    .ui-datepicker {
                        width: 280px;
                        padding: 5px;
                        background: #F6F6F6;
                        border: solid 1px #DCDCDC;
                        border-radius: 4px;
                        box-shadow: 0 4px 40px -8px rgba(0, 0, 0, 0.2);
                        opacity: 0;
                    }

                    @media screen and (max-width: 580px) {
                        .ui-datepicker {
                            top: auto !important;
                            right: 0 !important;
                            bottom: 0 !important;
                            left: 0 !important;
                            width: 100%;
                            border-radius: 0px;
                        }
                    }

                    .ui-datepicker.active {
                        opacity: 1;
                    }

                    .ui-datepicker-header {
                        height: 40px;
                        padding: 3px;
                        margin-bottom: 10px;
                    }

                    .ui-datepicker-header .ui-datepicker-title {
                        text-align: center;
                        line-height: 34px;
                    }

                    .ui-datepicker-month,
                    .ui-datepicker-year {
                        -webkit-appearance: none;
                        border: 0;
                        background: none;
                        outline: none;
                        font-size: 20px;
                        font-weight: 700;
                        color: #3C4447;
                        margin: 0 1px;
                    }

                    .ui-datepicker-prev, .ui-datepicker-next {
                        position: relative;
                        display: inline-block;
                        width: 34px;
                        height: 34px;
                        cursor: pointer;
                        text-indent: 9999px;
                        overflow: hidden;
                        border-radius: 3px 3px 3px 3px;
                    }

                    .ui-datepicker-prev:hover, .ui-datepicker-next:hover {
                        background: #3C4447;
                    }

                    .ui-datepicker-prev {
                        float: left;
                    }

                    .ui-datepicker-prev:after {
                        transform: rotate(45deg);
                        margin-left: 15px;
                    }

                    .ui-datepicker-next {
                        float: right;
                    }

                    .ui-datepicker-next:after {
                        transform: rotate(-135deg);
                        margin-left: 10px;
                    }


                    .ui-datepicker-prev:after,
                    .ui-datepicker-next:after {
                        content: "";
                        position: absolute;
                        display: block;
                        margin-top: -12px;
                        width: 10px;
                        height: 10px;
                        border-left: 3px solid #787c86;
                        border-bottom: 3px solid #787c86;
                        pointer-events: none;
                    }

                    .ui-datepicker-calendar {
                        width: 100%;
                        text-align: center;
                    }

                    .ui-datepicker-calendar thead tr th {
                        width: 40px;
                        padding-bottom: 6px;
                    }

                    .ui-datepicker-calendar thead tr th span {
                        display: block;
                        width: 100%;
                        padding: 0;
                        color: #3C4447;
                        font-size: 15px;
                        font-weight: 700;
                        text-transform: uppercase;
                        text-align: center;
                    }

                    .ui-datepicker-calendar tbody tr td {
                        padding-right: 3px;
                        padding-bottom: 3px;
                    }

                    .ui-datepicker-calendar tbody tr td:first-child {
                        padding-left: 3px;
                    }

                    .ui-state-default {
                        display: block;
                        text-decoration: none;
                        color: #3C4447;
                        height: 35px;
                        line-height: 35px;
                        font-weight: 500;
                        border-radius: 3px;
                        font-size: 15px;
                    }

                    .ui-state-default:hover {
                        background: #444B54;
                        text-decoration: none;
                        color: white;
                    }

                    .ui-state-highlight {
                        background: #d7d7d7;
                        color: #444B54;
                    }


                    .ui-datepicker-unselectable .ui-state-default {
                        color: rgba(255, 255, 255, 0.2);
                        pointer-events: none;
                    }

                    /*************
                    ***************
                    ***************
                    form calandar end
                    ***************
                    ***********
                    ***********/

                </style>


                <div class=" checkbox-new row">
                    <label class="col-md-4  col-sm-6 col-lg_8 col-xl-2 checkbox-l checkbox-s-red ">
                        <input type="checkbox" class="checkbox checkbox--red"/>
                        <span>Sport</span>
                    </label>
                    <label class="col-md-4  col-sm-6 col-lg_8 col-xl-2 checkbox-l checkbox-s-deep-purple">
                        <input type="checkbox" class="checkbox checkbox--deep-purple"/>
                        <span>Soirées</span>
                    </label>
                    <label class="col-md-4  col-sm-6 col-lg_8 col-xl-2 checkbox-l checkbox-s-blue ">
                        <input type="checkbox" class="checkbox checkbox--blue"/>
                        <span>Information</span>
                    </label>
                    <label class="col-md-4  col-sm-6 col-lg_8 col-xl-2 checkbox-l checkbox-s-green">
                        <input type="checkbox" class="checkbox checkbox--green"/>
                        <span>Partenariats</span>
                    </label>
                    <label class="col-md-4  col-sm-6 col-lg_8 col-xl-2 checkbox-l checkbox-s-orange">
                        <input type="checkbox" class="checkbox checkbox--orange"/>
                        <span>Voyage</span>
                    </label>
                    <label class="col-md-4  col-sm-6 col-lg_8 col-xl-2 checkbox-l checkbox-s-deep-orange">
                        <input type="checkbox" class="checkbox checkbox--deep-orange"/>
                        <span>Loisir</span>
                    </label>
                    <label class="col-md-4  col-sm-6 col-lg_8 col-xl-2 checkbox-l checkbox-s-blue-grey">
                        <input type="checkbox" class="checkbox checkbox--blue-grey"/>
                        <span>Aide étudiant</span>
                    </label>
                </div>
            </div>
        </div>
    </nav>
</div>
<br><br><br><br><br>

<div class="container">
    <div class="row">
        <?php
        $result=aff_news();
        foreach($result as $value)
        {
            ?>
        <div class="card mb-3 shadow">
            <div class="row no-gutters">
                <div class="col-md-3 col-sm-3 col-lg-3">
                    <div class='time'>
                        <div class='date'><strong><?php echo date('j M', strtotime($value['dateStart']))?></strong></div>
                    </div>
                    <img src="public/image/logo/BDE_CFA_INSTA/logo_BDE_CFA_INSTA-noir.png"
                         style="max-height: 250px; max-width: 250px" class="card-img">

                </div>
                <div class="col-md-8 col-sm-3 col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title">  <?php echo $value['title']?></h5>
                        <div class="badge-groupe">
                            <span style="background-color: red" class="badge badge-secondary"><i class="fas fa-running"></i> Sport</span>
                            <span  style="background-color: #673ab7" class="badge badge-secondary"><i class="fas fa-music"></i> Soirées</span>
                            <span  style="background-color: #2196f3" class="badge badge-secondary"><i class="fas fa-info-circle"></i> Information</span>
                            <span  style="background-color: #4caf50" class="badge badge-secondary"><i class="fas fa-hands-helping"></i> Partenariats</span>
                            <span  style="background-color: #ff9800" class="badge badge-secondary"><i class="fas fa-plane"></i> Voyage</span>
                            <span  style="background-color: #ff5722" class="badge badge-secondary"><i class="fas fa-theater-masks"></i> Loisir</span>
                            <span  style="background-color: #607d8b" class="badge badge-secondary"><i class="fas fa-graduation-cap"></i> Aide étudiant</span>
                        </div>
                        <p class="card-text"><?php echo $value['content']?></p>
                    </div>
                </div>
            </div>
        </div>
            <?php
        }

?>


    </div>
</div>

<br><br><br><br><br>
<style>
    .time {
        position: absolute;
        background: rgba(104,104, 104, 0.2);
        width: 54px;
        text-align: center;
        padding: 0.5em 0;
        color: #444;
    }
    .date {
        font-size: 1.1rem;
        font-weight: bolder;
    }





.badge-groupe{
    padding-bottom: 15px;
}
    .badge {
        margin-bottom:0.8%;
        font-size: 13px;
        padding-left: 2%;
        padding-right: 2%;
    }

    .marg-new {
        padding-bottom: 3%;
    }

    /**********
    input form
    **********/

    .in-new {
        margin-bottom: 4%;
    }

    .titre_new {
        color: #7F8181;
        margin-top: 11%;
        margin-left: 6%;
        margin-bottom: 1%;
        font-weight: 600;
    }


    .inserticon-fontico-new {
        color: black;
        float: left;
        position: relative;
        z-index: 2;
        left: 0.5em;
        top: 2.2em;
        width: 0;
    }

    .inputnew input {
        background-color: #F5F5F5;
        padding-left: 38px;
        margin-top: 30px;
        font-weight: 300;
        border: 0;
        border-bottom: 1.5px solid darkgrey;
        width: 100%;
        height: 36px;
        font-size: 20px;
    }

    .inputnew input:focus {
        background-color: #F5F5F5;

        border-bottom: 1.5px solid #4169E1;
        outline: none;
        box-shadow: none;
    }


    @media (max-width: 1052px){
        .titre_new {
            margin-top: 30%;
            margin-bottom: 10%;
        }
    }





    /*****
     Code for nav filtre
      ******/
    .nav-filtre {
        margin-left: 8%;
        margin-right: 8%;
        background-color: #F5F5F5;
        box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);
        -moz-box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);
        -webkit-box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);

    }
    /*********
     Code for checkboxes
     *******/

    .checkbox-l label {
        display: block;
        -moz-user-select: none;
        -webkit-user-select: none;
    }

    .checkbox-new label:hover {
        background-color: #e6e6e6;
    }

    .checkbox-l label > input {
        float: left;
    }

    .checkbox-l label > span {
        display: block;
    }

    .checkbox-new label {
        height: 25px;
        cursor: pointer;

    }

    .checkbox-new span {
        font-weight: 500;
        cursor: pointer;
        bottom: 15px;
    }

    .checkbox {
        top: 2px;
        position: relative;
        width: 1rem;
        height: 1rem;
        margin-right: .75rem;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
    }

    .checkbox:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        border: 2px solid #CECECE;
        transition: all 0.3s ease-in-out;
    }

    .checkbox:checked:before {
        height: 50%;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        border-top-style: none;
        border-right-style: none;
    }
    /*sport*/
    .checkbox--red:checked:before {
        border-color: red;
    }

    .checkbox-s-red span:hover {
        color: red;
    }

    /*Soirées*/
    .checkbox--deep-purple:checked:before {
        border-color: #673ab7;
    }

    .checkbox-s-deep-purple span:hover {
        color: #673ab7;
    }

    /*Information*/
    .checkbox--blue:checked:before {
        border-color: #2196f3;
    }

    .checkbox-s-blue span:hover {
        color: #2196f3;
    }

    /*Partenariats*/
    .checkbox--green:checked:before {
        border-color: #4caf50;
    }

    .checkbox-s-green span:hover {
        color: #4caf50;
    }

    /*Voyage*/
    .checkbox--orange:checked:before {
        border-color: #ff9800;
    }

    .checkbox-s-orange span:hover {
        color: #ff9800;
    }

    /*Loisir*/
    .checkbox--deep-orange:checked:before {
        border-color: #ff5722;
    }

    .checkbox-s-deep-orange span:hover {
        color: #ff5722;
    }

    /*Aide étudiant*/

    .checkbox--blue-grey:checked:before {
        border-color: #607d8b;
    }

    .checkbox-s-blue-grey span:hover {
        color: #607d8b;
    }

    /**/


</style>