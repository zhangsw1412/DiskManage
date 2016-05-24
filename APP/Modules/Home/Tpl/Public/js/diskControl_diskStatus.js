// 路径配置
require.config({
    paths:{ 
        'echarts' : 'http://echarts.baidu.com/build/echarts',
        'echarts/chart/pie' : 'http://echarts.baidu.com/build/echarts'
    }
});

function showChart(succ,fail,unused){
     // 使用
    require(
        [
            'echarts',
            'echarts/chart/pie' // 使用柱状图就加载bar模块，按需加载
        ],
        function (ec) {
            // 基于准备好的dom，初始化echarts图表
            var myChart = ec.init(document.getElementById('picturePlace')); 
            
            option = {
                    title : {
                        text: '盘片容量使用情况',
                        // subtext: '纯属虚构',
                        x:'center'
                    },
                    tooltip : {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient : 'vertical',
                        x : 'left',
                        data:['刻录成功','刻录失败','未使用']
                    },
                    toolbox: {
                        show : true,
                        feature : {
                            mark : {show: false},
                            dataView : {show: true, readOnly: false},
                            restore : {show: true},
                            saveAsImage : {show: true}
                        }
                    },
                    calculable : true,
                    series : [
                        {
                            name:'盘片用量',
                            type:'pie',
                            radius : '70%',
                            center: ['50%', '60%'],
                            data:[
                                {value:succ, name:'刻录成功'},
                                {value:fail, name:'刻录失败'},
                                {value:unused, name:'未使用'},
                            ]
                        }
                    ]
                };
            // 为echarts对象加载数据 
            myChart.setOption(option); 
        }
    );
};