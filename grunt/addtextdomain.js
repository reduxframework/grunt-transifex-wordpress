// Add textdomains
module.exports = {
    options: {
        textdomain: '<%= pkg.pot.textdomain %>',    // Project text domain.
        // BE SURE TO UPDATE THIS WITH EVERY textdomain that might exist, or you'll have issues
        updateDomains: [
            'textdomain',
            '!textdomain5',
            '<%= pkg.pot.textdomain %>'
        ]  // List of text domains to replace.
    },
    target: {
        files: {
            src: [
                '**/*.php',
                '!node_modules/**',
            ]
        }
    }
};