for (col = 13; col>0; col--) {
       i = col - 1;
    for (span = i; span<13; span++) {
    console.log(".col-"+col+"-span-" + span + " \{\ngrid-column: " +col+" / span " + span + "\;\n\}")
    }

    };



 
    for (span = 13; span>0; span--){
        i = span - 1
        for (col = i; col<13; col++) {
            console.log(".col-"+col+"-span-" + span + " \{\ngrid-column: " +col+" / span " + span + "\;\n\}")
        }
    }

    for (col=1; col<13; col++) {
        span = 13 - col;
        console.log(".col-"+col+"-span-" + span + " \{\ngrid-column: " +col+" / span " + span + "\;\n\}")        
    }

    spanCount = 14;

    for (c=1; c<13; c++) {
        spanCount--;
        for (s=1; s<spanCount; s++) {
            console.log(".col-"+c+"-span-" + s + " \{\ngrid-column: " +c+" / span " + s + "\;\n\}")
        }
    }

    for (c=1; c<13; c++) {
        console.log(".col-start-" + c + "\{\ngrid-column-start: " + c + "\;\n\}")
    }