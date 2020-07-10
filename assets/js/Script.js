$(function() {
  otable = $('#table').dataTable(
        {
           dom: 'Bfrtip',
              buttons: [
                  'copy', 'excel'
              ],
             scrollY:        500,
           scrollX:        true,
           scrollCollapse: true,
           paging:         true,
           fixedColumns:   {
                leftColumns: 3
            }
        }

    );
})

function filterme() {
  //build a regex filter string with an or(|) condition
  var Entity = $('input:checkbox[name="entity"]:checked').map(function() {
    return '^' + this.value + '\$';
  }).get().join('|');
  //filter in column 0, with an regex, no smart filtering, no inputbox,not case sensitive
  otable.fnFilter(Entity, 1, true, false, false, false);

  var qty = $('input:checkbox[name="qty"]:checked').map(function() {
    return '^' + this.value + '\$';
  }).get().join('|');
  //filter in column 0, with an regex, no smart filtering, no inputbox,not case sensitive
  otable.fnFilter(qty, 7, false, false, false, false);
}