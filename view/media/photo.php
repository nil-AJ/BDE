








<!-- Click photo to check out the modal -->

<div class="grid">
    <div class="grid-item grid-item--width2 grid-item--height2"></div>
    <div class="grid-item grid-item--width3"></div>
    <div class="grid-item"></div>
    <div class="grid-item grid-item--width2 grid-item--height3"></div>
    <div class="grid-item grid-item--height2"></div>
   <div class="grid-item grid-item--height2"></div>


</div>





<script>
    $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
    });

</script>



<style>
    * { box-sizing: border-box; }

    body {
        font-family: sans-serif;
        background-color: white;
        position: relative;
    }

    /* ---- grid ---- */

    /* clearfix */
    .grid:after {
        content: '';
        display: block;
        clear: both;
    }

    /* ---- grid-item ---- */

    .grid-sizer,
    .grid-item {
        width: 25%;
    }

    .grid-item {
        height: 200px;
        float: left;
        background-color: #F4F3F4;
        border: 4px solid white;
        -webkit-filter: grayscale(70%) blur(0.5px);
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        background-image: url(https://unsplash.it/900/900);
        background-size: cover;
        background-position: center center;
        transition: all 0.35s ease-in-out;
    }

    .grid-item:hover{
        cursor: pointer;
        -webkit-filter: grayscale(0%) blur(0);
    }


    .grid-item.item-opened{
        width: 80%;
        height: 80vw;
        border: 3px solid #e8e8e8;
        -webkit-filter: grayscale(0%) blur(0);
    }

    .grid-item--width2 {
        width:  50%;
    }

    .grid-item--height2 {
        height: 400px;
    }
    .grid-item--height3 {
        height: 600px;
    }

    @media only screen and (max-width: 580px){
        .grid-item{
            width: 50%;
        }
        .grid-item--width2 {
            width:  100%;
        }
    }



</style>