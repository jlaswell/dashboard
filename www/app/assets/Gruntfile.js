module.exports = function(grunt) {
	grunt.initConfig({
		jshint: {
			files: ['Gruntfile.js', '../../public/js/src/*.js'],
		},
		sass: {
			dist: {
				files: {
					'../../public/packages/dashboard/stylesheets/author.css' : '../../public/packages/dashboard/sass/author.scss',
				}
			}
		},
		uglify: {
			dist: {
				src: '../../public/js/src/*.js',
				dest: '../../public/js/dist/dashboard.min.js'
			}
		},
		watch: {
			scripts: {
				files: '../../public/js/dist/dashboard.min.js',
				tasks: ['jshint', 'uglify']
			},
			styles: {
				files: '../../public/packages/dashboard/sass/author.scss',
				tasks: ['sass']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['jshint', 'uglify', 'sass']);
};