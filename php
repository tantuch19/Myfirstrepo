
build:
    tests:
        override:
            -
                command: 'vendor/bin/phpunit --coverage-clover=some-file'
                coverage:
                    file: 'some-file'
                    format: 'clover'
build:
    nodes:
        angular:
            # Assumes that the API project is in a sub-path 'frontend' in your repository root
            root_path: './frontend'
            environment:
                node: v7.4

            tests:
                override:
                    - ng test

        api:
            # Assumes that the API project is in a sub-path 'backend' in your repository root
            root_path: './backend'
            environment:
                php: 7.1

            tests:
                override:
                    - vendor/bin/phpunit
build:
    nodes:
        php56:
            environment:
                php: 5.6

            tests:
                override:
                    -
                        command: vendor/bin/phpunit

        php71:
            environment:
                php: 7.1

            tests:
                override:
                    -
                        command: vendor/bin/phpunit
build:
    nodes:
        php:
            environment:
                php: 5.6
                variables:
                    FOO_PATH: 'BAR'
            tests:
                override:
                    - phpunit
        php71:
            environment:
                php: 7.1
                variables:
                    FOO_PATH: 'BAR'
            tests:
                override:
                    - phpunit
