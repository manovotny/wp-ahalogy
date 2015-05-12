module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-ahalogy',
            description: 'Adds Ahalogy to your WordPress site.',
            git: 'git://github.com/manovotny/wp-ahalogy.git',
            name: 'WP Ahalogy',
            slug: 'wp-ahalogy',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-ahalogy',
            version: '2.0.0'
        }
    };

}());
