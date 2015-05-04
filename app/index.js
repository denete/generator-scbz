'use strict';
var util = require('util');
var path = require('path');
var yeoman = require('yeoman-generator');
var yosay = require('yosay');

var ScbzGenerator = yeoman.generators.Base.extend({
    initializing: function () {
        this.pkg = require('../package.json');
    },

    prompting: function () {
        var done = this.async();

        this.log(yosay(
            'Welcome to the SCBZ site generator!'
        ));

        var prompts = [{
            type: 'input',
            name: 'fullJurisdictionName',
            message: 'Full jurisdiction name?',
            default: 'XXX Lottery'
        },{
            type: 'input',
            name: 'abbrJurisdictionName',
            message: 'Abbreviated jurisdiction name?',
            default: 'XXX Lottery'
        },{
            type: 'input',
            name: 'lotteryUrl',
            message: 'Lottery URL?',
            default: 'http://XXX/'
        },{
            type: 'input',
            name: 'gameName',
            message: 'Game name?',
            default: 'XXX'
        },{
            type: 'input',
            name: 'googleAnalyticsCode',
            message: 'Google Analytics Code?',
            default: 'GA-XXX'
        },{
            type: 'confirm',
            name: 'gameIsPassthru',
            message: 'Is this a passthru site?',
            default: true
        },{
            type: 'input',
            name: 'passthruUrl',
            message: 'Passthru URL?',
            default: 'http://',
            when: function(props) {
                return props.gameIsPassthru;
            }
        },{
            type: 'confirm',
            name: 'useBootstrap',
            message: 'Do you wish to use Bootstrap?',
            default: false
        },{
            type: 'confirm',
            name: 'useJasnyBootstrap',
            message: 'Use Jasny Bootstrap?',
            default: false,
            when: function(props) {
                return props.useBootstrap;
            }
        },{
            type: 'confirm',
            name: 'useParsley',
            message: 'Do you wish to use Parsley?',
            default: false
        },{
            type: 'confirm',
            name: 'useFancybox',
            message: 'Do you wish to use FancyBox?',
            default: false
        }];

        this.prompt(prompts, function (props) {
            this.fullJurisdictionName = props.fullJurisdictionName;
            this.abbrJurisdictionName = props.abbrJurisdictionName;
            this.lotteryUrl = props.lotteryUrl;
            this.gameName = props.gameName;
            this.googleAnalyticsCode = props.googleAnalyticsCode;
            this.gameIsPassthru = props.gameIsPassthru;
            this.passthruUrl = props.passthruUrl;
            this.useBootstrap = props.useBootstrap;
            this.useJasnyBootstrap = props.useJasnyBootstrap;
            this.useParsley = props.useParsley;
            this.useFancybox = props.useFancybox;

            done();
        }.bind(this));
    },

    writing: {
        app: function () {
            this.directory('app-scaffolding/app', 'app');
            this.directory('app-scaffolding/assets', 'assets');
            this.directory('app-scaffolding/common', 'common');
            this.directory('app-scaffolding/enter', 'enter');
            this.directory('app-scaffolding/users', 'users');

            this.src.copy('_package.json', 'package.json');
            this.src.copy('_bowerrc', '.bowerrc');
            this.src.copy('_gulpfile.js', 'gulpfile.js');
            this.src.copy('_template.php', 'template.php');

            var configContext = {
                fullJurisdictionName: this.fullJurisdictionName,
                abbrJurisdictionName: this.abbrJurisdictionName,
                lotteryUrl: this.lotteryUrl,
                gameName: this.gameName,
                googleAnalyticsCode: this.googleAnalyticsCode,
                gameIsPassthru: this.gameIsPassthru,
                passthruUrl: this.passthruUrl
            };

            this.template('_config.php', '_config.php', configContext);
        },

        projectfiles: function () {
            this.src.copy('_editorconfig', '.editorconfig');
            this.src.copy('_jshintrc', '.jshintrc');
        },

        bower: function() {
            var bower = {
                name: this._.slugify(this.appname),
                private: true,
                dependencies: {}
            };

            if(this.useBootstrap) {
                bower.dependencies.bootstrap = '~3.3.4';
            }

            if(this.useJasnyBootstrap) {
                bower.dependencies['jasny-bootstrap'] = '~3.1.3';
            }

            if(this.useParsley) {
                bower.dependencies.parsleyjs = '~2.0.7';
            }

            if(this.useFancybox) {
                bower.dependencies.fancybox = '~2.1.5';
            }

            this.write('bower.json', JSON.stringify(bower, null, 2));
        }
    },

    end: function () {
        this.installDependencies();
    }
});

module.exports = ScbzGenerator;
