

$( document ).ready(function() {
    console.log( "ready!" );
    //$("#main-container").previewer();
    var frame = $('#iframe'),
    verybig = $('#verybig-screen').multiSizeScreen(frame, {
      size: "desktop-big"
    }),
    big = $('#big-screen').multiSizeScreen(frame, {
      size: "desktop-big"
    }),
    medium = $('#medium-screen').multiSizeScreen(frame, {
      size: "iPad"
    }),
    small = $('#small-screen').multiSizeScreen(frame, {
      size: "iPhone"
    }),
    custom = $('#custom-screen').multiSizeScreen(frame, {
      size: "custom",
      "width": "360px",
      "height": "640px",
      "padding": "35px 0"
    });

   


    var TotalTemplates=0;
    var active_template=0;
    var active_layout=0;
    var templates = [];

    function InitializeTemnplates(){

        $.getJSON('./IBSS-Templates/js/templates.json', function(res) {
          // console.log(res);
          templates = res.templates;
          TotalTemplates = templates.length;
          for(var i=0;i<templates.length;i++){
              var html="<option id='template-"+i+"' value='"+i+"'>"+templates[i].title+"</option>"
              $('#templates-dropdown').append(html)
          }
          $('#templates-dropdown').val(active_template.toString()).change();
      }); 
    }

    InitializeTemnplates();


    $('#templates-dropdown').change(function(){
        console.log( "templates-change", this.value );
        active_template =  Number(this.value);
        active_layout = 0;
        $('#layouts-dropdown').html("");
        for(var i=0;i<templates[active_template].layouts.length;i++){
            var html="<option id='layout-"+i+"' value='"+i+"'>"+(i+1)+"</option>"
            $('#layouts-dropdown').append(html)
        }
        $('#layouts-dropdown').val(active_layout.toString()).change();
    })


    $('#layouts-dropdown').change(function(){
        console.log( "layouts-change", this.value );
        active_layout = Number(this.value);
        $('#screen').attr('src',templates[active_template].layouts[active_layout]);
    })

    $('#big-screen').click();

    $('.viewBtn').on('click',function(){
        console.log(this.id)
        $('.viewBtn').removeClass('activeBtn');
        $('#'+this.id).addClass('activeBtn');
        
    });

});


