@extends('template')
@section('main')
<!-- table of students-->
<table id="ranktable" class="table table-condensed table-hover">
    <thead>
      <tr>
        <th width="10px">R</th>
        <th width="80px" class="hidden-xs">Flag</th>
        <th class="hidden-xs">Name</th>
        <th class="hidden-sm hidden-md hidden-lg">Nick</th>
        <th class="hidden-xs hidden-sm">MC</th>
      	<th class="hidden-xs hidden-sm">TC</th>
      	<th>SPE</th>
        <th class="hidden-xs hidden-sm">HW</th>
      	<th class="hidden-xs hidden-sm">Bs</th>
      	<th class="hidden-xs hidden-sm">KS</th>
      	<th class="hidden-xs hidden-sm">Ac</th>
        <th>DIL</th>
        <th>Sum</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>1</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="flag"> SGP</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="photo"><a href="{{url('student/1')}}"> Alice </a> </td>
	      <td class="hidden-sm hidden-md hidden-lg"><a href="student1.html">Al</a></td>
        <td class="hidden-xs hidden-sm">1</td>
        <td class="hidden-xs hidden-sm highlighted">0</td>
        <td>1</td>
        <td class="hidden-xs hidden-sm highlighted">3</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td class="hidden-xs hidden-sm highlighted">2</td>
        <td class="hidden-xs hidden-sm">2</td>
        <td>10</td>
        <td>19</td>
      </tr>

      <tr>
        <td>2</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="flag"> SGP</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="photo"><a href="{{url('student/2')}}"> Bob </a> </td>
	      <td class="hidden-sm hidden-md hidden-lg"><a href="student2.html">B</a></td>
        <td class="hidden-xs hidden-sm">1</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td>1</td>
        <td class="hidden-xs hidden-sm highlighted">3</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td class="hidden-xs hidden-sm highlighted">2</td>
        <td class="hidden-xs hidden-sm">3</td>
        <td>5</td>
        <td>16</td>
      </tr>

      <tr>
        <td>3</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="flag"> SGP</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="photo"><a href="{{url('student/3')}}"> Carl </a></td>
	      <td class="hidden-sm hidden-md hidden-lg"><a href="student3.html">Cr</a></td>
        <td class="hidden-xs hidden-sm">1</td>
        <td class="hidden-xs hidden-sm highlighted">0.5</td>
        <td>1</td>
        <td class="hidden-xs hidden-sm highlighted">3</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td class="hidden-xs hidden-sm highlighted">2</td>
        <td class="hidden-xs hidden-sm">3</td>
        <td>5</td>
        <td>15.5</td>
      </tr>

      <tr>
        <td>4</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="flag"> SGP</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="photo">Wills </td>
        <td class="hidden-sm hidden-md hidden-lg">wilson</td>
        <td class="hidden-xs hidden-sm">1</td>
        <td class="hidden-xs hidden-sm highlighted">0</td>
        <td>1</td>
        <td class="hidden-xs hidden-sm highlighted">0</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td class="hidden-xs hidden-sm highlighted">0.5</td>
        <td class="hidden-xs hidden-sm">1</td>
        <td>10</td>
        <td>13.5</td>
      </tr>

      <tr>
        <td>5</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="flag"> SGP</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="photo">Wills </td>
        <td class="hidden-sm hidden-md hidden-lg">wilson</td>
        <td class="hidden-xs hidden-sm">0</td>
        <td class="hidden-xs hidden-sm highlighted">0</td>
        <td>1</td>
        <td class="hidden-xs hidden-sm highlighted">2</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td class="hidden-xs hidden-sm highlighted">2</td>
        <td class="hidden-xs hidden-sm">3</td>
        <td>4</td>
        <td>12</td>
      </tr>

      <tr>
        <td>6</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="flag"> SGP</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="photo"> Wills</td>
        <td class="hidden-sm hidden-md hidden-lg">wilson</td>
        <td class="hidden-xs hidden-sm">0</td>
        <td class="hidden-xs hidden-sm highlighted">0</td>
        <td>1</td>
        <td class="hidden-xs hidden-sm highlighted">3</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td class="hidden-xs hidden-sm highlighted">2</td>
        <td class="hidden-xs hidden-sm">2</td>
        <td>4</td>
        <td>11</td>
      </tr>

      <tr>
        <td>7</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="flag"> SGP</td>
        <td class="hidden-xs"><img src="img/smiley.jpg" class="photo">Wills </td>
        <td class="hidden-sm hidden-md hidden-lg">wilson</td>
        <td class="hidden-xs hidden-sm">0</td>
        <td class="hidden-xs hidden-sm highlighted">0</td>
        <td>1</td>
        <td class="hidden-xs hidden-sm highlighted">3</td>
        <td class="hidden-xs hidden-sm highlighted">1</td>
        <td class="hidden-xs hidden-sm highlighted">2</td>
        <td class="hidden-xs hidden-sm">2</td>
        <td>2</td>
        <td>10</td>
      </tr>
    </tbody>
</table>
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<script type="text/javascript" src="js/highlightRow.js"></script>
<script type="text/javascript" src="js/highlightCell.js"></script>
<script type="text/javascript" src="js/tableSort.js"></script>
@stop
