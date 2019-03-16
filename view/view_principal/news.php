<div class="container-fluid">
    <h3 class="titre_new">Les derniers news du BDE</h3>
    <nav class="nav-filtre">
        <div class="container">


            <input type="text" placeholder="Saisissez le titre..." name="" class="inputtext "/>







            <input type="date" class="" placeholder="date min..." name=""/>


            <div class="checkbox-new row">
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--red"/> <span> Red</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--pink"/> <span>Pink</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--purple"/> <span>Purple</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--deep-purple"/> <span>Deep-Purple</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--indigo"/> <span>Indigo</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--blue"/> <span>Blue</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--light-blue"/> <span>Light-Blue</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--cyan"/> <span>Cyan</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--teal"/> <span>Teal</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--green"/> <span>Green</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--light-green"/> <span>Light-Green</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--lime"/> <span>Lime</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--yellow"/> <span>Yellow</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--amber"/> <span>Amber</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--orange"/> <span>Orange</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--deep-orange"/> <span>Deep Orange</span>
                </div>
                <div class="col-2">
                    <input type="checkbox" class="checkbox checkbox--blue-grey"/> <span>Blue-Grey</span>
                </div>
            </div>
        </div>
    </nav>
</div>
<br><br><br><br><br><br><br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 card" >
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img src="public/image/font/verdure-nav.png" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br>

<style>
    .titre_new {
        color: #7F8181;
        margin-top: 11%;
        margin-left: 7%;
        margin-bottom: 1%;
        font-weight: 600;
    }

    /* Code for input*/
    .inputtext input {
        margin-top: 30px;
        font-weight: 300;
        border: 0;
        border-bottom: 1.5px solid darkgrey;
        width: 100%;
        height: 36px;
        font-size: 20px;
    }

    .inputtext input:focus {
        border-bottom: 1.5px solid #4169E1;
        outline: none;
        box-shadow: none;
    }

    /* Code for nav filtre */
    .nav-filtre {
        margin-left: 8%;
        margin-right: 8%;
        background-color: #F5F5F5;
        box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);
        -moz-box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);
        -webkit-box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);

    }


    /* Code for checkboxes */
    .checkbox-new span{
        cursor: pointer;
        bottom: 15px;
    }
    .checkbox-new ul {
        margin: 16px -16px;
    }

    .checkbox-new ul li {
        display: inline-block;
        margin: 2px 20px;
    }

    .checkbox {
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

    .checkbox--red:checked:before {
        border-color: #f44336;
    }

    .checkbox--pink:checked:before {
        border-color: #e91e63;
    }

    .checkbox--purple:checked:before {
        border-color: #9c27b0;
    }

    .checkbox--deep-purple:checked:before {
        border-color: #673ab7;
    }

    .checkbox--indigo:checked:before {
        border-color: #3f51b5;
    }

    .checkbox--blue:checked:before {
        border-color: #2196f3;
    }

    .checkbox--light-blue:checked:before {
        border-color: #03a9f4;
    }

    .checkbox--cyan:checked:before {
        border-color: #00bcd4;
    }

    .checkbox--teal:checked:before {
        border-color: #009688;
    }

    .checkbox--green:checked:before {
        border-color: #4caf50;
    }

    .checkbox--light-green:checked:before {
        border-color: #8bc34a;
    }

    .checkbox--lime:checked:before {
        border-color: #cddc39;
    }

    .checkbox--yellow:checked:before {
        border-color: #ffeb3b;
    }

    .checkbox--amber:checked:before {
        border-color: #ffc107;
    }

    .checkbox--orange:checked:before {
        border-color: #ff9800;
    }

    .checkbox--deep-orange:checked:before {
        border-color: #ff5722;
    }

    .checkbox--blue-grey:checked:before {
        border-color: #607d8b;
    }


</style>