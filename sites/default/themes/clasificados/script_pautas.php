<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
<script>
  googletag.cmd.push(function() {
    
    // Mapping para mostras tags en Movil
    var mappingM = googletag.sizeMapping().
        addSize([0, 0], []).
        addSize([1, 1]).        
        addSize([320, 400], [[320, 50], [300, 50], [300, 250]]). 
        addSize([320, 700], [300, 250]).
        build();
    // Mapping para mostras tags en Desktop
    var mappingD = googletag.sizeMapping().
        addSize([1, 1]).    
        addSize([1050, 200], [1024, 120]).
        addSize([1200, 400], [[160, 600],[1000, 30],[1000, 90],[1000, 150],[970, 90],[728, 90],[300, 250]]).
        addSize([0, 0], []).
        build();    
    /*
    // Mapping para mostras tags en Movil
    var mappingM = googletag.sizeMapping().
        addSize([0, 0], []).
        addSize([320, 700], [[320, 50], [300, 50], [300, 250]]). // Tablet
        addSize([1050, 200], []). // Ordenador
        build();

    // Mapping para mostras tags en Desktop
    var mappingD = googletag.sizeMapping().
        addSize([0, 0], []).
        addSize([1050, 200], [[160, 600],[1000, 30],[1000, 90],[1000, 150],[970, 90],[728, 90],[300, 250]]). // Ordenador
        build();
    */

    googletag.defineSlot('/11164406/clasificados.laopinion.com.co/AllAdUnits', [[728, 90], [970, 90]], 'div-gpt-ad-1565885538230-0').addService(googletag.pubads());
    googletag.defineSlot('/11164406/clasificados.laopinion.com.co/AllAdUnits', [[160, 600]], 'div-gpt-ad-1565885538230-1').addService(googletag.pubads());
    googletag.defineSlot('/11164406/clasificados.laopinion.com.co/AllAdUnits', [[300, 600]], 'div-gpt-ad-1565885538230-2').addService(googletag.pubads());
    googletag.defineSlot('/11164406/clasificados.laopinion.com.co/AllAdUnits', [[300, 250]], 'div-gpt-ad-1565885538230-3').addService(googletag.pubads());
    googletag.defineSlot('/11164406/clasificados.laopinion.com.co/AllAdUnits', [[320, 50]], 'div-gpt-ad-1565885538230-4').addService(googletag.pubads());
    googletag.defineOutOfPageSlot('/11164406/clasificados.laopinion.com.co/AllAdUnits', 'div-gpt-ad-1565885538230-5').addService(googletag.pubads());
    
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();

    window.googletag.pubads().setTargeting("ttLS", getTailTargetParam('LS'));
    window.googletag.pubads().setTargeting("ttS", getTailTargetParam('S'));
    window.googletag.pubads().setTargeting("ttT", getTailTargetParam('T'));
    window.googletag.pubads().setTargeting("ttC", getTailTargetParam('C'));
    window.googletag.pubads().setTargeting("ttU", getTailTargetParam('U'));
    window.googletag.pubads().setTargeting("ttCA", getTailTargetParam('CA'));
    window.googletag.pubads().setTargeting("ttE", getTailTargetParam('E'));
    window.googletag.pubads().setTargeting("ttA", getTailTargetParam('A'))
    window.googletag.pubads().setTargeting("ttG", getTailTargetParam('G'))
    
    googletag.enableServices();
  });

</script>