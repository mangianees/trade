window.addEventListener('load', function () {


<template>
    <!-- <ais-index app-id="GAK18FB40X" api-key="a991661510679d4719b43b8eb3d5894c" index="make"> -->

        <ais-index app-id="GAK18FB40X"
               api-key="a991661510679d4719b43b8eb3d5894c"
               index-name="make">
 
        
        
        
        
        <ais-input placeholder="Search">

        </ais-input>

        <ais-result>            
          <template slot-scope= "{result}">
                <div>
                    <h2>{{result.make}}</h2>
                </div>
            </template>
        </ais-result>
    </ais-index>
</template>
})