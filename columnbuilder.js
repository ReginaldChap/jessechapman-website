   for (col = 1; col<13; col++) {
    for (span = col; span<13; span--) {
    console.log(".col-"+col+"-span-" + span + " \{\ngrid-column: " +col+" / span " + span + "\;\n\}")
    }

    };

    for(span = 13; span>0; span--){
        for (col=1; col<13; col++) {
            console.log(".col-"+col+"-span-" + span + " \{\ngrid-column: " +col+" / span " + span + "\;\n\}")
        }
    }
