# /Vagrantfile
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "hashicorp/precise32"
  config.vm.network "private_network", ip: "33.33.33.33"
#  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.provision "puppet" do |puppet|
    puppet.manifests_path = "manifests"
    puppet.manifest_file  = "site.pp"
  end
  config.vm.synced_folder ".", "/vagrant", type: "nfs"
end
