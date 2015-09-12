https://github.com/jharding/grunt-exec
module.exports = {
    // Update WebTranslateIt translation - grunt exec:update_po_wti
    update_po_wti: {
        cmd: 'wti pull',
        cwd: '<%= pkg.theme.domainpath %>',
    },
    txpull: { // Pull Transifex translation - grunt exec:txpull
        cmd: 'tx pull -a --minimum-perc=<%= pkg.pull_percentage %>' // Change the percentage with --minimum-perc=yourvalue
    },
    txpush_s: { // Push pot to Transifex - grunt exec:txpush_s
        cmd: 'tx push -s'
    }
};