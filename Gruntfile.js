module.exports = function(grunt){

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		watch:{
			configFiles:{
				files:['prod/sass/**/*.scss','prod/js/**/*.js','app/wp-content/themes/chilerunning_new/**/*.php'],
				options:{
					livereload: true,
				},
			},
			sass:{
				files:['prod/sass/**/*.scss'],
				tasks: ['sass'],
				options:{
					livereload:true,
				},
			},
			javascript:{
				files:['prod/js/**/*.js','Gruntfile.js'],
				tasks:['jshint','uglify'],
				options:{
					livereload:true,
				},
			},
		},

		sass: {
			dist: {
				options: {
					style: 'compressed'
					//style: 'nested'
				},
				files: {
					'app/wp-content/themes/chilerunning_new/css/main.css': 'prod/sass/main.scss'
				},
			},
		},
		jshint:{
			all:[
				'Gruntfile.js','prod/js/**/*.js'
			]
		},

		uglify:{
			options:{
				beautify:true
			},
			all:{
				files:{
			        'app/wp-content/themes/chilerunning_new/js/output.min.js': ['prod/js/scripts.js']
			    }
			}
		},
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('dev', ['watch']);
	grunt.registerTask('default', ['sass','uglify']);

};