<!doctype html>
<html lang="en">
<?php
include 'z_execute/connection.php';
session_start();

//< showuser
$sql="SELECT USER_ID,USERNAME,BLOCKED FROM TBL_LOGIN;";
$result=mysqli_query($connection,$sql);
$confirm_result=mysqli_fetch_assoc($result);
//> showuser
?>
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>User</title>
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/fresh-bootstrap-table"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="assets/css/demo.css" rel="stylesheet" />


  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

  <!--  Just for demo purpose, do not include in your project   -->
  <script src="assets/js/demo/gsdk-switch.js"></script>
  <script src="assets/js/demo/jquery.sharrre.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <style>
    body{
      background-color:white;

    }
  </style>

</head>
<body >
  <?php include 'z_otherUI/sidebar_users.php' ?>
  <div  class="wrapper">
    <!--   Creative Tim Branding   -->


    <div class="container">
      <div class="row">

        <div  class="col-md-10 col-md-offset-2">

          <div class="description">
            <h2>Users table</h2>
          </div>

          <div class="fresh-table full-color-azure">
        <!--
          Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
          Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
        -->


        <table id="fresh-table" class="table">
          <thead>
            <th  data-field="id">ID</th>
            <th data-field="name" data-sortable="true">Username</th>
            <th data-field="salary" data-sortable="true">Status</th>
            <th  style="color:red" data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
          </thead>
          <tbody>
            <?php  while($row = $result->fetch_assoc()) {
              ?>
              <tr>
               <td ><?php echo $row['USER_ID']; ?></td>
               <td><?php echo $row['USERNAME']; ?></td>
              <td><?php echo ($row['BLOCKED'] == null) ? 'Not Blocked' : false;  ?></td>
              <td></td>
            
            <?php
                }
              ?>
              </tbody>
            </table>
          </div>


        </div>
      </div>
    </div>
  </div>




</body>
<script type="text/javascript">
  var $table = $('#fresh-table')
  var $alertBtn = $('#alertBtn')

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function operateFormatter(value, row, index) {
    return [
    '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
    '<i class="fa fa-heart"></i>',
    '</a>',
    '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
    '<i class="fa fa-edit"></i>',
    '</a>',
    '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
    '<i class="fa fa-remove"></i>',
    '</a>'
    ].join('')
  }

  $(function () {
    $table.bootstrapTable({
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: true,
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      pagination: true,
      striped: true,
      sortable: true,
      pageSize: 8,
      pageList: [8, 10, 25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })

    $alertBtn.click(function () {
      alert('You pressed on Alert')
    })
  })

  $('#sharrreTitle').sharrre({
    share: {
      twitter: true,
      facebook: true
    },
    template: '',
    enableHover: false,
    enableTracking: true,
    render: function (api, options) {
      $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
    },
    enableTracking: true,
    url: location.href
  })

  $('#twitter').sharrre({
    share: {
      twitter: true
    },
    enableHover: false,
    enableTracking: true,
    buttons: { twitter: {via: 'CreativeTim'}},
    click: function (api, options) {
      api.simulateClick()
      api.openPopup('twitter')
    },
    template: '<i class="fa fa-twitter"></i> {total}',
    url: location.href
  })

  $('#facebook').sharrre({
    share: {
      facebook: true
    },
    enableHover: false,
    enableTracking: true,
    click: function (api, options) {
      api.simulateClick()
      api.openPopup('facebook')
    },
    template: '<i class="fa fa-facebook-square"></i> {total}',
    url: location.href
  })
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

  ga('create', 'UA-46172202-1', 'auto')
  ga('send', 'pageview')

</script>

</html>
