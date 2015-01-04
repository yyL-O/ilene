module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // 将less编译成css
        less: {
            compile: {
                files: {
                    'css/style.css': ['less/style.less'] // 需要编译的less文件
                }
            }
        },

        // 压缩css文件
        cssmin: {
            minify: {
                options: {
                    banner: '/**<%= grunt.template.today("2014-09-18") %> **/'
                },
                files: {
                    'style.css': ['css/style.css']
                }
            }
        },

        // 实时监听文件变化并编译
        watch: {
            files: ['style.less', 'less/*.less'],
            tasks: ['less', 'cssmin']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');


    // 默认被执行的任务列表。
    grunt.registerTask('default', ['watch']);

};