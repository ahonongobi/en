 function eligiable() {
     var P1 = document.formval2.pr_amt2.value; // pick the form input value..
     var rate1 = document.formval2.int_rate2.value; // pick the form input value..
     var n1 = document.formval2.period2.value; // pick the form input value..
     var r1 = rate1 / (12 * 100); // to calculate rate percentage..
     var prate1 = (P1 * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest..
     var emi1 = Math.ceil(prate1 * 100) / 100; // to parse emi amount..
     var existing = document.formval2.ExLoan.value;
     var existingLoan = (existing - (existing * 60 / 100));
     var income1 = document.formval2.NetIncome.value;
     if (income1 <= 14999) {
         var incomere = ((income1) * 40 / 100) - existingLoan;
     } else if (income1 <= 29999) {
         var incomere = ((income1) * 45 / 100) - existingLoan;
     } else if (income1 >= 30000) {
         var incomere = ((income1) * 50 / 100) - existingLoan;
     }
     var incomereq = Math.floor(incomere / emi1 * P1);
     var prate2 = (incomereq * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest2..
     var emi2 = Math.ceil((prate2) * 100) / 100; // to parse emi2 amount..   //Check again Reminder
     // to assign value in field1 as fixed upto two decimal..
     if (incomereq > P1) {
         document.formval3.field13.value = ("Vous êtes éligible à ce prêt");
         document.formval3.field11.value = (("$ / € " + P1 + " avec une mensualité de " + "$ / € " + emi1.toFixed(0)));
         document.formval3.field12.value = ("Vous êtes éligible pour un prêt maximum de" + ("$ / € " + incomereq + " avec une mensualité de " + "CAD " + emi2.toFixed(0)));
          
     } else {
         document.formval3.field13.value = ("Vous n’êtes pas éligible à ce prêt");
         document.formval3.field11.value = ("");
         document.formval3.field12.value = ("Vous êtes éligible pour un prêt maximum de " + ("$ / € " + incomereq + " avec une mensualité de " + "$ / € " + emi2.toFixed(0)));
     }

     //to assign value in field2.. 
 }
