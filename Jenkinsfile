pipeline {

    agent any

    stages {

        stage('Cleanup') {

            steps {

                preSCMBuildStep {

                    sh "rm -rf *"

                }

            }

        }

        stage('Clone') {

            steps {

                git Clone https://github.com/saidnouiri98/ci_cd_pipeline.git
                cd ci_cd_pipeline
                ls -all

            }

        }

    }

}