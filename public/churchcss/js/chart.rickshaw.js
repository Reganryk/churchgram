$(function(){
  'use strict'


  var bar1 = new Rickshaw.Graph({
    element: document.querySelector('#chartBar1'),
    renderer: 'bar',
    max: 80,
    series: [{
      data: [
        { x: 0, y: 40 },
        { x: 1, y: 49 },
        { x: 2, y: 38 },
        { x: 3, y: 30 },
        { x: 4, y: 32 },
        { x: 5, y: 40 },
        { x: 6, y: 20 },
        { x: 7, y: 10 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 35 },
        { x: 11, y: 20 },
        { x: 12, y: 40 },
        { x: 13, y: 25 }
      ],
      color: '#26A2E2'
    }]
  });
  bar1.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    bar1.configure({
      width: $('#chartBar1').width(),
      height: $('#chartBar1').height()
    });
    bar1.render();
  });


  /*********************** BAR 2 *********************/

  var bar2 = new Rickshaw.Graph({
    element: document.querySelector('#chartBar2'),
    renderer: 'bar',
    max: 80,
    series: [{
      data: [
        { x: 0, y: 40 },
        { x: 1, y: 49 },
        { x: 2, y: 38 },
        { x: 3, y: 30 },
        { x: 4, y: 32 },
        { x: 5, y: 40 },
        { x: 6, y: 20 },
        { x: 7, y: 10 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 35 },
        { x: 11, y: 20 },
        { x: 12, y: 40 },
        { x: 13, y: 25 }
      ],
      color: '#8CC343'
    }]
  });

  bar2.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    bar2.configure({
      width: $('#chartBar2').width(),
      height: $('#chartBar2').height()
    });
    bar2.render();
  });


  /************* STACKED BAR1 *************/

  var stacked1 = new Rickshaw.Graph({
    element: document.querySelector('#chartStackedBar1'),
    renderer: 'bar',
    max: 100,
    series: [{
      data: [
        { x: 0, y: 20 },
        { x: 1, y: 30 },
        { x: 2, y: 10 },
        { x: 3, y: 15 },
        { x: 4, y: 10 },
        { x: 5, y: 20 },
        { x: 6, y: 15 },
        { x: 7, y: 20 },
        { x: 8, y: 25 },
        { x: 9, y: 20 },
        { x: 10, y: 25 },
        { x: 11, y: 10 },
        { x: 12, y: 15 },
        { x: 13, y: 10 }
      ],
      color: '#466C79'
    },
    {
      data: [
        { x: 0, y: 10 },
        { x: 1, y: 10 },
        { x: 2, y: 15 },
        { x: 3, y: 20 },
        { x: 4, y: 12 },
        { x: 5, y: 20 },
        { x: 6, y: 10 },
        { x: 7, y: 15 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 15 },
        { x: 11, y: 10 },
        { x: 12, y: 20 },
        { x: 13, y: 25 }
      ],
      color: '#26A2E2'
    },
    {
      data: [
        { x: 0, y: 10 },
        { x: 1, y: 15 },
        { x: 2, y: 15 },
        { x: 3, y: 20 },
        { x: 4, y: 32 },
        { x: 5, y: 30 },
        { x: 6, y: 20 },
        { x: 7, y: 10 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 35 },
        { x: 11, y: 20 },
        { x: 12, y: 20 },
        { x: 13, y: 25 }
      ],
      color: '#8CC343'
    }]
  });
  stacked1.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    stacked1.configure({
      width: $('#chartStackedBar1').width(),
      height: $('#chartStackedBar1').height()
    });
    stacked1.render();
  });


  /*************** STACKED 2 **********************/
  var stacked2 = new Rickshaw.Graph({
    element: document.querySelector('#chartStackedBar2'),
    renderer: 'bar',
    max: 100,
    series: [{
      data: [
        { x: 0, y: 20 },
        { x: 1, y: 30 },
        { x: 2, y: 10 },
        { x: 3, y: 15 },
        { x: 4, y: 10 },
        { x: 5, y: 20 },
        { x: 6, y: 15 },
        { x: 7, y: 20 },
        { x: 8, y: 25 },
        { x: 9, y: 20 },
        { x: 10, y: 25 },
        { x: 11, y: 10 },
        { x: 12, y: 15 },
        { x: 13, y: 10 }
      ],
      color: '#065381'
    },
    {
      data: [
        { x: 0, y: 10 },
        { x: 1, y: 10 },
        { x: 2, y: 15 },
        { x: 3, y: 20 },
        { x: 4, y: 12 },
        { x: 5, y: 20 },
        { x: 6, y: 10 },
        { x: 7, y: 15 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 15 },
        { x: 11, y: 10 },
        { x: 12, y: 20 },
        { x: 13, y: 25 }
      ],
      color: '#8B103E'
    },
    {
      data: [
        { x: 0, y: 10 },
        { x: 1, y: 15 },
        { x: 2, y: 15 },
        { x: 3, y: 20 },
        { x: 4, y: 32 },
        { x: 5, y: 30 },
        { x: 6, y: 20 },
        { x: 7, y: 10 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 35 },
        { x: 11, y: 20 },
        { x: 12, y: 20 },
        { x: 13, y: 25 }
      ],
      color: '#E34856'
    }]
  });
  stacked2.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    stacked2.configure({
      width: $('#chartStackedBar2').width(),
      height: $('#chartStackedBar2').height()
    });
    stacked2.render();
  });


  /***************** MULTIPLE BOX ********************/

  var multibar = new Rickshaw.Graph({
    element: document.querySelector('#chartMultiBar1'),
    renderer: 'bar',
    stack: false,
    max: 60,
    series: [{
      data: [
        { x: 0, y: 20 },
        { x: 1, y: 25 },
        { x: 2, y: 10 },
        { x: 3, y: 15 },
        { x: 4, y: 20 },
        { x: 5, y: 40 },
        { x: 6, y: 15 },
        { x: 7, y: 40 },
        { x: 8, y: 25 }
      ],
      color: '#065381'
    },
    {
      data: [
        { x: 0, y: 10 },
        { x: 1, y: 30 },
        { x: 2, y: 45 },
        { x: 3, y: 30 },
        { x: 4, y: 42 },
        { x: 5, y: 20 },
        { x: 6, y: 30 },
        { x: 7, y: 15 },
        { x: 8, y: 20 }
      ],
      color: '#34B2E4'
    }]
  });

  multibar.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    multibar.configure({
      width: $('#chartMultiBar1').width(),
      height: $('#chartMultiBar1').height()
    });
    multibar.render();
  });


  /**************** MULTI BAR 2 ***************/

  var multibar2 = new Rickshaw.Graph({
    element: document.querySelector('#chartMultiBar2'),
    renderer: 'bar',
    stack: false,
    max: 60,
    series: [{
      data: [
        { x: 0, y: 20 },
        { x: 1, y: 25 },
        { x: 2, y: 10 },
        { x: 3, y: 15 },
        { x: 4, y: 20 },
        { x: 5, y: 40 },
        { x: 6, y: 15 },
        { x: 7, y: 40 },
        { x: 8, y: 25 }
      ],
      color: '#0282C9'
    },
    {
      data: [
        { x: 0, y: 10 },
        { x: 1, y: 30 },
        { x: 2, y: 45 },
        { x: 3, y: 30 },
        { x: 4, y: 42 },
        { x: 5, y: 20 },
        { x: 6, y: 30 },
        { x: 7, y: 15 },
        { x: 8, y: 20 }
      ],
      color: '#E97C9C'
    },
    {
      data: [
        { x: 0, y: 20 },
        { x: 1, y: 50 },
        { x: 2, y: 25 },
        { x: 3, y: 10 },
        { x: 4, y: 22 },
        { x: 5, y: 40 },
        { x: 6, y: 10 },
        { x: 7, y: 25 },
        { x: 8, y: 40 }
      ],
      color: '#818AC3'
    }]
  });
  multibar2.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    multibar2.configure({
      width: $('#chartMultiBar2').width(),
      height: $('#chartMultiBar2').height()
    });
    multibar2.render();
  });


  /*************** LINE BAR 1 *****************/

  var line1 = new Rickshaw.Graph({
    element: document.querySelector('#chartLine1'),
    renderer: 'line',
    max: 80,
    series: [{
      data: [
        { x: 0, y: 40 },
        { x: 1, y: 49 },
        { x: 2, y: 38 },
        { x: 3, y: 30 },
        { x: 4, y: 32 },
        { x: 5, y: 40 },
        { x: 6, y: 20 },
        { x: 7, y: 10 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 35 },
        { x: 11, y: 20 },
        { x: 12, y: 40 },
        { x: 13, y: 25 }
      ],
      color: '#26A2E2'
    }]
  });
  line1.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    line1.configure({
      width: $('#chartLine1').width(),
      height: $('#chartLine1').height()
    });
    line1.render();
  });


  /***************** LINE CHART 2 **********************/

  var line2 = new Rickshaw.Graph({
    element: document.querySelector('#chartLine2'),
    renderer: 'line',
    stack: false,
    max: 60,
    series: [{
      data: [
        { x: 0, y: 20 },
        { x: 1, y: 25 },
        { x: 2, y: 10 },
        { x: 3, y: 15 },
        { x: 4, y: 20 },
        { x: 5, y: 40 },
        { x: 6, y: 15 },
        { x: 7, y: 40 },
        { x: 8, y: 25 }
      ],
      color: '#0282C9'
    },
    {
      data: [
        { x: 0, y: 10 },
        { x: 1, y: 30 },
        { x: 2, y: 45 },
        { x: 3, y: 30 },
        { x: 4, y: 42 },
        { x: 5, y: 20 },
        { x: 6, y: 30 },
        { x: 7, y: 15 },
        { x: 8, y: 20 }
      ],
      color: '#E97C9C'
    }]
  });
  line2.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    line2.configure({
      width: $('#chartLine2').width(),
      height: $('#chartLine2').height()
    });
    line2.render();
  });


  /******************** AREA CHART 1 ******************/

  var area1 = new Rickshaw.Graph({
    element: document.querySelector('#chartArea1'),
    renderer: 'area',
    max: 80,
    series: [{
      data: [
        { x: 0, y: 40 },
        { x: 1, y: 49 },
        { x: 2, y: 38 },
        { x: 3, y: 30 },
        { x: 4, y: 32 },
        { x: 5, y: 40 },
        { x: 6, y: 20 },
        { x: 7, y: 10 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 35 },
        { x: 11, y: 20 },
        { x: 12, y: 40 },
        { x: 13, y: 25 }
      ],
      color: '#26A2E2'
    }]
  });
  area1.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    area1.configure({
      width: $('#chartArea1').width(),
      height: $('#chartArea1').height()
    });
    area1.render();
  });


  /****************** AREA CHART 2 ******************/
  var area2 = new Rickshaw.Graph({
    element: document.querySelector('#chartArea2'),
    renderer: 'area',
    stack: false,
    max: 80,
    series: [{
      data: [
        { x: 0, y: 45 },
        { x: 1, y: 60 },
        { x: 2, y: 55 },
        { x: 3, y: 40 },
        { x: 4, y: 52 },
        { x: 5, y: 45 },
        { x: 6, y: 35 },
        { x: 7, y: 25 },
        { x: 8, y: 30 },
        { x: 9, y: 45 },
        { x: 10, y: 40 },
        { x: 11, y: 30 },
        { x: 12, y: 45 },
        { x: 13, y: 35 }
      ],
      color: '#0282C9'
    },
    {
      data: [
        { x: 0, y: 40 },
        { x: 1, y: 49 },
        { x: 2, y: 38 },
        { x: 3, y: 30 },
        { x: 4, y: 32 },
        { x: 5, y: 40 },
        { x: 6, y: 20 },
        { x: 7, y: 10 },
        { x: 8, y: 20 },
        { x: 9, y: 25 },
        { x: 10, y: 35 },
        { x: 11, y: 20 },
        { x: 12, y: 40 },
        { x: 13, y: 25 }
      ],
      color: '#E97C9C'
    }]
  });
  area2.render();

  // Responsive Mode
  new ResizeSensor($('.churchgram-mainpanel'), function(){
    area2.configure({
      width: $('#chartArea2').width(),
      height: $('#chartArea2').height()
    });
    area2.render();
  });


});
