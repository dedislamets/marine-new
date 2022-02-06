
        const $table = $('#table');
        const $remove = $('#remove');
        let selections = [];

        function initTable() {
          $table.bootstrapTable({
            height: getHeight(),
            classes: 'table table-striped table-hover',
            columns: [
              
              [
                //{
                //  field: 'state',
                //  checkbox: true,
                  
                //  align: 'center',
                //  valign: 'middle'
                //}, 
                {
                  title: 'No Pengajuan',
                  field: 'kode_pengajuan',
                  
                  align: 'center',
                  valign: 'middle',
                  sortable: true
                },
                {
                  field: 'title_pengajuan',
                  title: 'Title',
                  sortable: true,
                  editable: true,
                  align: 'left'
                },
                {
                  field: 'nama_seller',
                  title: 'Author',
                  sortable: true,
                  editable: true,
                  align: 'left'
                }, 
                {
                  field: 'nilai_pengajuan',
                  title: 'Price',
                  sortable: true,
                  align: 'right',
                  editable: {
                    type: 'text',
                    title: 'Item Price',
                    validate(value) {
                      value = $.trim(value);
                      if (!value) {
                        return 'This field is required';
                      }
                      if (!/^\$/.test(value)) {
                        return 'This field needs to start width $.'
                      }
                      const data = $table.bootstrapTable('getData');
                      const index = $(this).parents('tr').data('index');
                      console.log(data[index]);
                      return '';
                    }
                  },
                  editableDisplayFormatter: totalPriceFormatter
                  
                }, 
                {
                  field: 'status',
                  title: 'Status',
                  sortable: true,
                  editable: true,
                  align: 'center'
                },
                {
                  field: 'operate',
                  title: 'Item Operate',
                  align: 'center',
                  events: operateEvents,
                  formatter: operateFormatter
                }
              ]
            ]
          });          
          setTimeout(() => {
            $table.bootstrapTable('resetView');
          }, 200);
          $table.on('check.bs.table uncheck.bs.table ' +
                    'check-all.bs.table uncheck-all.bs.table', () => {
            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
            
            selections = getIdSelections();            
          });
          $table.on('expand-row.bs.table', (e, index, row, $detail) => {
            if (index % 2 == 1) {
              $detail.html('Loading from ajax request...');
              $.get('LICENSE', res => {
                $detail.html(res.replace(/\n/g, '<br>'));
              });
            }
          });
          $table.on('all.bs.table', (e, name, args) => {
            console.log(name, args);
          });

          $remove.click(() => {
            const ids = getIdSelections();
            $table.bootstrapTable('remove', {
              field: 'id',
              values: ids
            });
            $remove.prop('disabled', true);
          });
          $(window).resize(() => {
            $table.bootstrapTable('resetView', {
              height: getHeight()
            });
          });
        }

        function getIdSelections() {
          return $.map($table.bootstrapTable('getSelections'), ({id}) => id);
        }

        function responseHandler(res) {
          $.each(res.rows, (i, row) => {
            row.state = $.inArray(row.id, selections) !== -1;
          });
          return res;
        }

        function detailFormatter(index, row) {
          const html = [];
          $.each(row, (key, value) => {
            html.push(`<p><b>${key}:</b> ${value}</p>`);
          });
          return html.join('');
        }

        function operateFormatter(value, row, index) {
          return [
            '<a class="btn btn-primary btn-block view" style="padding: 2px; text-transform: capitalize;" href="javascript:void(0)" >',
            '<i class="fa fa-archive"></i>&nbsp;View',
            '</a>  ',
          ].join('');
        }

        window.operateEvents = {
          'click .view': function (e, value, row, index) {              
              var url = "<?= base_url(); ?>setting/view_agreement_pdf/"+ row.id;
              window.open(url, '_blank');
              //alert(`You click like action, row: ${JSON.stringify(row)}`);
          },
          'click .remove': function(e, value, {id}, index) {
            $table.bootstrapTable('remove', {
              field: 'id',
              values: [id]
            });
          }
        };

        function totalPriceFormatter(data) {          
          var total = 0;

          if (data.length > 0) {            
            var num = parseFloat(data).toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
            return num;
          }

          return '';
        }

        function linkFormatter(data, row) {                    
            var link = '<?= base_url(); ?>ship/'+row.id_kapal+'/' + data.replace(/ /g,'-').toLowerCase() + '.html';
            var markup = '<a href="' + link + '" target="_blank">' +
              data +
              '</a>';
            return markup;
        }

        function getHeight() {
          return $(window).height() - $('h1').outerHeight(true);
        }

        $(() => {
          initTable();
          $("[name='toggle']").append('<i class="fa fa-toggle-off"></i>');
          $("[title='Export data']").append('<i class="fa fa-download"></i>');
          $(".fixed-table-header").children().css('margin-top','0');
        })
