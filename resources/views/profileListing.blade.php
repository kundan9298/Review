            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <div class="breadcrumbs-header fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs-header_url">
                                <a href="/">Home</a><span></span>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                        <div class="pwh_bg"></div>
                    </div>
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">


<style>
  *{
  box-sizing: border-box;
}

body{
  font-family: 'Lato', sans-serif;
  color: #202020;
}

p{
  display: none;
}

table{
  width: 100%;
  border-collapse: collapse;
  text-align: left;
  overflow: hidden;
  
 td, th{
    border-top: 1px solid #ECF0F1;
    padding: 10px;
  }
  
  td{
    border-left: 1px solid #ECF0F1;
    border-right: 1px solid #ECF0F1;
  }
  
  th{
    background-color: #4ECDC4;
  }
  
  tr:nth-of-type(even) td{
    background-color: lighten(#4ECDC4, 35%);
  }
  
  .total{
    th{
      background-color: white;
    }
    
    td{
      text-align: right;
      font-weight: 700;
    }
  }
}

  .mobile-header{
    display: none;
  }

@media only screen and (max-width: 760px){
  p{
    display: block;
    font-weight: bold;
  }
  
  table{
    tr{
      td:not(:first-child), th:not(:first-child), td:not(.total-val){
        display: none;
      }
      
      &:nth-of-type(even) td:first-child{
        background-color: lighten(#4ECDC4, 35%);
      }
      &:nth-of-type(odd) td:first-child{
        background-color: white;
      }
      
      &:nth-of-type(even) td:not(:first-child){
        background-color: white;
      }
      
      th:first-child{
        width: 100%;
        display:block;
      }
      
      th:not(:first-child){
        width: 40%;
        transition: transform 0.4s ease-out;
        transform:translateY(-9999px);
        position: relative;
        z-index: -1;
      }
      
      td:not(:first-child){
        transition: transform 0.4s ease-out;
        transform:translateY(-9999px);
        width: 60%;
        position: relative;
        z-index: -1;
      }
      
      td:first-child{
        display: block;
        cursor: pointer;
      }
      
      &.total th{
        width: 25%;
        display: inline-block;
      }
      
      td.total-val{
        display: inline-block;
        transform: translateY(0);
        width: 75%;
      }
    }
  }
}

@media only screen and (max-width: 300px){
  table{
    tr{
      th:not(:first-child){
        width: 50%;
        font-size: 14px;
      }
      
      td:not(:first-child){
        width: 50%;
        font-size: 14px;
      }
    }
  }
}
</style>



<p>Click the names to see more data.</p>
<table>
  <thead>
  <tr class="table-headers">
    <th>Name</th>
    <th>Number</th>
    <th>Market rate</th>
    <th>Weight</th>
    <th>Value</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>PlayCo Group Universal Flex</td>
      <th class="mobile-header">Number</th><td>2489</td>
      <th class="mobile-header">Market rate</th><td>€12.35</td>
      <th class="mobile-header">Weight</th><td>5%</td>
      <th class="mobile-header">Value</th><td>€1,536.96</td>
    </tr>
    <tr>
      <td>House of Dedgeny EUR Flex</td>
      <th class="mobile-header">Number</th><td>5478</td>
      <th class="mobile-header">Market rate</th><td>€42.68  </td>
      <th class="mobile-header">Weight</th><td>2%</td>
      <th class="mobile-header">Value</th><td>€4,676.02</td>
    </tr>
    <tr>
      <td>PlayCo Group Local</td>
      <th class="mobile-header">Number</th><td>123</td>
      <th class="mobile-header">Market rate</th><td>€147.36</td>
      <th class="mobile-header">Weight</th><td>3%</td>
      <th class="mobile-header">Value</th><td>€543.76</td>
    </tr>
    <tr>
      <td>PlayCo Group Low</td>
      <th class="mobile-header">Number</th><td>5477</td>
      <th class="mobile-header">Market rate</th><td>€147.00</td>
      <th class="mobile-header">Weight</th><td>10%</td>
      <th class="mobile-header">Value</th><td>€80,511.90</td>
    </tr>
     <tr>
      <td>House of Dedgeny High</td>
      <th class="mobile-header">Number</th><td>5899</td>
      <th class="mobile-header">Market rate</th><td>€ 288.00</td>
      <th class="mobile-header">Weight</th><td>4%</td>
      <th class="mobile-header">Value</th><td>€67,956.48</td>
    </tr>
    <tr>
      <td>House of Dedgeny USD Med</td>
      <th class="mobile-header">Number</th><td>11477</td>
      <th class="mobile-header">Market rate</th><td>€18.00</td>
      <th class="mobile-header">Weight</th><td>5%</td>
      <th class="mobile-header">Value</th><td>€10,329.30</td>
    </tr>
     <tr>
      <td>Sterck Inc. Med</td>
      <th class="mobile-header">Number</th><td>1476</td>
      <th class="mobile-header">Market rate</th><td>€187.00</td>
      <th class="mobile-header">Weight</th><td>10%</td>
      <th class="mobile-header">Value</th><td>€27,601.20</td>
    </tr>
    <tr>
      <td>PlayCo Group Universal High</td>
      <th class="mobile-header">Number</th><td>6547</td>
      <th class="mobile-header">Market rate</th><td>€782.00</td>
      <th class="mobile-header">Weight</th><td>12%</td>
      <th class="mobile-header">Value</th><td>€614,370.48</td>
    </tr>
     <tr>
      <td>PlayCo Group Universal Low</td>
      <th class="mobile-header">Number</th><td>1476</td>
      <th class="mobile-header">Market rate</th><td>€187.00</td>
      <th class="mobile-header">Weight</th><td>10%</td>
      <th class="mobile-header">Value</th><td>€27,601.20</td>
    </tr>
    <tr>
      <td>PlayCo Group Universal High</td>
      <th class="mobile-header">Number</th><td>1471</td>
      <th class="mobile-header">Market rate</th><td>€148.00</td>
      <th class="mobile-header">Weight</th><td>18%</td>
      <th class="mobile-header">Value</th><td>€39,187.44</td>
    </tr>
     <tr>
      <td>Sterck Inc. Low</td>
      <th class="mobile-header">Number</th><td>1978</td>
      <th class="mobile-header">Market rate</th><td>€68.23</td>
      <th class="mobile-header">Weight</th><td>11%</td>
      <th class="mobile-header">Value</th><td>€14,845.48</td>
    </tr>
    <tr>
      <td>Sterck Inc. Universal High</td>
      <th class="mobile-header">Number</th><td>6512</td>
      <th class="mobile-header">Market rate</th><td>€642.02</td>
      <th class="mobile-header">Weight</th><td>5%</td>
      <th class="mobile-header">Value</th><td>€209,041.71</td>
    </tr>
     <tr>
      <td>Sterck Inc. Flex</td>
      <th class="mobile-header">Number</th><td>5423</td>
      <th class="mobile-header">Market rate</th><td>€78.96</td>
      <th class="mobile-header">Weight</th><td>7%</td>
      <th class="mobile-header">Value</th><td>€29,974.01</td>
    </tr>
    <tr>
      <td>PlayCo Group Universal Med</td>
      <th class="mobile-header">Number</th><td>7812</td>
      <th class="mobile-header">Market rate</th><td>€54.86</td>
      <th class="mobile-header">Weight</th><td>8%</td>
      <th class="mobile-header">Value</th><td>€34,285.31</td>
    </tr>
    <tr class='total'>
      <th>Total</th>
      <td class="total-val" colspan="4">€1,134,860.04</td>
    </tr>
  </tbody>
</table>


<script>
  $(window).on('resize', function() {
    
    if ($(this).width() < 760) {
       $('tr td:first-child').click(function(){

          $(this).siblings().css({'display': 'inline-block'});

          var $this = $(this);
          setTimeout(function(){
          $this.siblings().css('transform', 'translateY(0)'); 
         },0);

          $('tr td:first-child').not($(this)).siblings().css({'display': 'none', 'transform': 'translateY(-9999px)'});
      });  
    } else if ($(this).width() > 760) {
        //unbind click : name is not clickable when screen is > 700px
        $( "tr td:first-child").unbind( "click" );
        //remove with jquery added styles
        $('tr td:first-child').siblings().css({'display': '', 'transform': ''});
    }

}).resize();
</script>