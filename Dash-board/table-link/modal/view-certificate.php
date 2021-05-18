
  <div class="modal fade" id="view-certificate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body" id="printThis">
            <div class="card-body">
      <!--       <div class="table-responsive"> -->
                <form method="POST">
                <table width="100%" align="center" cellpadding='3'>
                  <tr>
                     <td align="center">
                        <img src="header_logo/barangay1.png" width="762" class="img-fluid" alt="Responsive image">
                     </td>
                  </tr>
                  <tr>
                     <td align="center">
                        <b>OFFICE OF THE BARANGAY CAPTAIN</b>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <hr>
                     </td>
                  </tr>
                  <tr>
                     <td align="center">
                        <h2><b>CERTIFICATE OF RESIDENCY</b></h2>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <table width="100%" cellpadding='3'>
                        </table>
                     </td>
                  <tr>
                   <tr>
                     <td align="left" style="padding-left: 10%;padding-bottom: 20px">
                        <b>TO WHOM IT MAY CONCERN:</b>
                     </td>
                  </tr>
                 <br><br>
                 <tr>
                     <td width="100%" align='left' style=" text-indent: 50px;padding-left: 10%;padding-right: 10%;;padding-bottom: 15px">
                      
                           This is to certify that <strong id="edit_selfstatus"></strong>&nbsp;<strong id="edit_residencename">&nbsp;</strong>, of legal age, marriead, Filipino citizin, whose specimen signature appears below, is a  <strong>PERMANENT RESIDENT</strong> of this Barangay Minanga Norte, Iguig, Cagayan.
                       
                     </td>

                  </tr>
                      <td width="100%" align='left' style=" text-indent: 50px;padding-left: 10%;padding-right: 10%">
                      
                       Based on records of this office, she has been residing at Barangay Minanga Norte, Municipality of Iguig, Cagayan.<br><br>


                        This <STRONG>CERTIFICATION</STRONG> is being issued upon the request of the above-named person for whatever legal purpose it may serve.<br><br>
                       <p style=" text-indent: 50px">Issued this 28<sup>th</sup> day of June, 2013 at Barangay Minanga Norte, Iguig,</p><br><Br>

                       Specimen Signature: <br><br>


                       _____________________
                       <br><Br>

                      <div class="row">
                       <div class="col-md-6">
                       </div>
                        <div class="col-md-6">
                       <strong style="right: "><u>RUBIN R. MACABABBAD</u></strong><br>
                                                   <p style=" text-indent: 65px">Punong Barangay</p>
                     </div>
                     </div>
                       

                       Note:  <br>

                        <p style="font-size: 12px">"Not valid without official seal"</p>


                     </td>


               </table>
             </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" class="form-control" name="user" value="<?php echo $f_name;?>">
                <button type="button" class="btn btn-danger" id="Close" data-dismiss="modal">Close</button>
              <button type="button" id="Print" onclick="this.style.display='none'"  class="btn btn-primary">Print</button>
            </div>
             </form>
         </div>
 
     </div>
</div>

</div>
<script>
document.getElementById("Print").onclick = function () {
    printElement(document.getElementById("printThis"));
};

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}
</script>
