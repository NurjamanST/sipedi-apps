import './bootstrap';
import 'flowbite';
import 'apexcharts';

import DataTable from 'datatables.net-dt';
 
let table = new DataTable('#myTable');

import ApexCharts from 'apexcharts';

// Grafik Sebaran Data Anggota Berdasarkan Tingkatan



const options = {
    colors: ["#1A56DB", "#FDBA8C"],
    series: [
      {
        name: "Active",
        color: "#31C48D",
        data: [
          { x: "Pemula", y: 231 },
          { x: "Dasar 1", y: 122 },
          { x: "Dasar 2", y: 63 },
          { x: "Calon Keluarga", y: 421 },
          { x: "Kel. Strip Putih", y: 122 },
          { x: "Kel. Strip Putih Hijau", y: 323 },
          { x: "Kel. Strip Hijau", y: 111 },
          { x: "Kel. Strip Hijau Biru", y: 122 },
          { x: "Kel. Strip Biru", y: 63 },
          { x: "Kel. Strip Biru Merah", y: 421 },
          { x: "Kel. Strip Merah", y: 122 },
          { x: "Kel. Strip Merah Kuning", y: 323 },
          { x: "Kel. Strip Kuning", y: 421 },
          { x: "Pendekar", y: 50 },
        ],
      },
      {
        name: "Pasive",
        color: "#F05252",
        data: [
          { x: "Pemula", y: 232 },
          { x: "Dasar 1", y: 113 },
          { x: "Dasar 2", y: 341 },
          { x: "Calon Keluarga", y: 224 },
          { x: "Kel. Strip Putih", y: 522 },
          { x: "Kel. Strip Putih Hijau", y: 411 },
          { x: "Kel. Strip Hijau", y: 111 },
          { x: "Kel. Strip Hijau Biru", y: 122 },
          { x: "Kel. Strip Biru", y: 63 },
          { x: "Kel. Strip Biru Merah", y: 421 },
          { x: "Kel. Strip Merah", y: 122 },
          { x: "Kel. Strip Merah Kuning", y: 323 },
          { x: "Kel. Strip Kuning", y: 421 },
          { x: "Pendekar", y: 50 },
        ],
      },
    ],
    chart: {
    height: "100%",
    width: "100%",
      type: "bar",
      fontFamily: "Inter, sans-serif",
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "70%",
        borderRadiusApplication: "end",
        borderRadius: 8,
      },
    },
    tooltip: {
      shared: true,
      intersect: false,
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },
    states: {
      hover: {
        filter: {
          type: "darken",
          value: 1,
        },
      },
    },
    stroke: {
      show: true,
      width: 0,
      colors: ["transparent"],
    },
    grid: {
      show: false,
      strokeDashArray: 4,
      padding: {
        left: 2,
        right: 2,
        top: -14
      },
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: false,
    },
    xaxis: {
      floating: false,
      labels: {
        show: true,
        style: {
          fontFamily: "Inter, sans-serif",
          cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
        }
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
  }
  
  if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("column-chart"), options);
    chart.render();
  }
    