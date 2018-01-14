<?php include 'template\header.php'; ?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">PageFour</li>
</ol>

		<style type="text/css">
			#chart-container {
				width: 640px;
				height: auto;
			}
		</style>
 

  <div class="card mb-3">
            <div class="card-header" style="background-color: #00C851;color: whitesmoke;">
                <i class="fa fa-chart" ></i>PageFour</div>
            <div class="card-body">
 

            <div id="chart-container">
			<canvas id="mycanvas"></canvas>
		</div>

      
            </div>
            
        </div>
          
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
 
    $(document).ready(function(){
 
		 
			var player = [];
			var score = [];
        var data =<?php echo $team; ?>;
			for(var i in data) {
				player.push("Player " + data[i].team);
				score.push(data[i].score);
			}
 
			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Player Score',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
	 
});
 
    </script>    
 

<?php include 'template\footer.php'; ?>