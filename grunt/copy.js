// Add files/folders here you don't want to have in the compressed package
module.exports = {
	main: {
		src: [
			'**',
			'!node_modules/**',
			'!build/**',
			'!.git/**',
			'!Gruntfile.js',
			'!package.json',
			'!.gitignore',
			'!.gitmodules',
			'!.tx/**',
			'!grunt/**',
			'!**/Gruntfile.js',
			'!**/package.json',
			'!**/README.md',
			'!**/*~'
			],
		dest: 'build/<%= pkg.name %>/'
	}
};