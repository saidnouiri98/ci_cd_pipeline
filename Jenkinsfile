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

                ssh "git Clone https://github.com/saidnouiri98/ci_cd_pipeline.git"
                ssh "cd ci_cd_pipeline"
                ssh "ls -all"

            }

        }

    }

}