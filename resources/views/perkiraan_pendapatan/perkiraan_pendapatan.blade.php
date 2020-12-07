@extends('master.app')

@section('title')

Perkiraan Pendapatan

@stop

@section('content')
<section class="section">
    <form action="{{Route('cari')}}" method="GET" >
        <div class="row">
            <input type="number" name="tahun"  class="form-control col-md-2" placeholder="Tahun">
        <button type="submit" style="margin-left: 10px;" class=" btn btn-success">Cari</button>
        </div>
      </form>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="panel">
              <div class="panel">
                  <div id = 'chartPerkiraan'></div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartPerkiraan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Perkiraan Pendapatan Karet'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (Kg)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} Kg</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Berat Bersih',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'Berat Kotor',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }]
});
              
</script>
@endsection