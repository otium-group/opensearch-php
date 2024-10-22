<?php

declare(strict_types=1);

/**
 * Copyright OpenSearch Contributors
 * SPDX-License-Identifier: Apache-2.0
 *
 * OpenSearch PHP client
 *
 * @link      https://github.com/opensearch-project/opensearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

namespace OpenSearch\Namespaces;

/**
 * Class ClusterNamespace
 *
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class ClusterNamespace extends AbstractNamespace
{
    /**
     * Provides explanations for shard allocations in the cluster.
     *
     * $params['include_disk_info']     = (boolean) If true, returns information about disk usage and shard sizes. (Default = false)
     * $params['include_yes_decisions'] = (boolean) If true, returns YES decisions in explanation. (Default = false)
     * $params['pretty']                = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                 = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']           = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']           = (any) Comma-separated list of filters used to reduce the response.
     * $params['body']                  = (array) The index, shard, and primary flag to explain. Empty means 'explain the first unassigned shard'
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function allocationExplain(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\AllocationExplain');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Deletes a component template.
     *
     * $params['name']                    = (string) Name of the component template to delete. Wildcard (*) expressions are supported.
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['master_timeout']          = (string) Period to wait for a connection to the master node.If no response is received before the timeout expires, the request fails and returns an error.
     * $params['timeout']                 = (string) Period to wait for a response.If no response is received before the timeout expires, the request fails and returns an error.
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function deleteComponentTemplate(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\DeleteComponentTemplate');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * Delete any existing decommission.
     *
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']       = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function deleteDecommissionAwareness(array $params = [])
    {
        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\DeleteDecommissionAwareness');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Clears cluster voting config exclusions.
     *
     * $params['wait_for_removal'] = (boolean) Specifies whether to wait for all excluded nodes to be removed from thecluster before clearing the voting configuration exclusions list.Defaults to true, meaning that all excluded nodes must be removed fromthe cluster before this API takes any action. If set to false then thevoting configuration exclusions list is cleared even if some excludednodes are still in the cluster. (Default = true)
     * $params['pretty']           = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']            = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']      = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']           = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']      = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function deleteVotingConfigExclusions(array $params = [])
    {
        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\DeleteVotingConfigExclusions');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Delete weighted shard routing weights.
     *
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']       = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function deleteWeightedRouting(array $params = [])
    {
        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\DeleteWeightedRouting');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Returns information about whether a particular component template exist.
     *
     * $params['name']                    = (string) Name of the component template to check existence of. Wildcard (*) expressions are supported.
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['local']                   = (boolean) If true, the request retrieves information from the local node only.Defaults to false, which means information is retrieved from the master node. (Default = false)
     * $params['master_timeout']          = (string) Period to wait for a connection to the master node. If no response isreceived before the timeout expires, the request fails and returns anerror.
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return bool
     */
    public function existsComponentTemplate(array $params = []): bool
    {
        $name = $this->extractArgument($params, 'name');

        // manually make this verbose so we can check status code
        $params['client']['verbose'] = true;

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\ExistsComponentTemplate');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return BooleanRequestWrapper::performRequest($endpoint, $this->transport);
    }
    /**
     * Returns one or more component templates.
     *
     * $params['name']                    = (array) Name of the component template to retrieve. Wildcard (`*`) expressions are supported.
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['local']                   = (boolean) If `true`, the request retrieves information from the local node only.If `false`, information is retrieved from the master node. (Default = false)
     * $params['master_timeout']          = (string) Period to wait for a connection to the master node.If no response is received before the timeout expires, the request fails and returns an error.
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getComponentTemplate(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\GetComponentTemplate');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * Get details and status of decommissioned attribute.
     *
     * $params['awareness_attribute_name'] = (string) Awareness attribute name.
     * $params['pretty']                   = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                    = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']              = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                   = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']              = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getDecommissionAwareness(array $params = [])
    {
        $awareness_attribute_name = $this->extractArgument($params, 'awareness_attribute_name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\GetDecommissionAwareness');
        $endpoint->setParams($params);
        $endpoint->setAwarenessAttributeName($awareness_attribute_name);

        return $this->performRequest($endpoint);
    }
    /**
     * Returns cluster settings.
     *
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['flat_settings']           = (boolean) If `true`, returns settings in flat format. (Default = false)
     * $params['include_defaults']        = (boolean) If `true`, returns default cluster settings from the local node. (Default = false)
     * $params['master_timeout']          = (string) Period to wait for a connection to the master node.If no response is received before the timeout expires, the request fails and returns an error.
     * $params['timeout']                 = (string) Period to wait for a response.If no response is received before the timeout expires, the request fails and returns an error.
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getSettings(array $params = [])
    {
        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\GetSettings');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Fetches weighted shard routing weights.
     *
     * $params['attribute']   = (string) Awareness attribute name.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']       = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getWeightedRouting(array $params = [])
    {
        $attribute = $this->extractArgument($params, 'attribute');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\GetWeightedRouting');
        $endpoint->setParams($params);
        $endpoint->setAttribute($attribute);

        return $this->performRequest($endpoint);
    }
    /**
     * Returns basic information about the health of the cluster.
     *
     * $params['index']                           = (array) Comma-separated list of data streams, indices, and index aliases used to limit the request. Wildcard expressions (*) are supported. To target all data streams and indices in a cluster, omit this parameter or use `_all` or `*`.
     * $params['awareness_attribute']             = (string) The awareness attribute for which the health is required.
     * $params['cluster_manager_timeout']         = (string) Operation timeout for connection to cluster-manager node.
     * $params['expand_wildcards']                = (any) Whether to expand wildcard expression to concrete indices that are open, closed or both.
     * $params['level']                           = (enum) Can be one of cluster, indices or shards. Controls the details level of the health information returned. (Options = awareness_attributes,cluster,indices,shards)
     * $params['local']                           = (boolean) If true, the request retrieves information from the local node only. Defaults to false, which means information is retrieved from the master node. (Default = false)
     * $params['master_timeout']                  = (string) Period to wait for a connection to the master node. If no response is received before the timeout expires, the request fails and returns an error.
     * $params['timeout']                         = (string) Period to wait for a response. If no response is received before the timeout expires, the request fails and returns an error.
     * $params['wait_for_active_shards']          = (any) A number controlling to how many active shards to wait for, all to wait for all shards in the cluster to be active, or 0 to not wait.
     * $params['wait_for_events']                 = (enum) Can be one of immediate, urgent, high, normal, low, languid. Wait until all currently queued events with the given priority are processed. (Options = high,immediate,languid,low,normal,urgent)
     * $params['wait_for_no_initializing_shards'] = (boolean) A boolean value which controls whether to wait (until the timeout provided) for the cluster to have no shard initializations. Defaults to false, which means it will not wait for initializing shards.
     * $params['wait_for_no_relocating_shards']   = (boolean) A boolean value which controls whether to wait (until the timeout provided) for the cluster to have no shard relocations. Defaults to false, which means it will not wait for relocating shards.
     * $params['wait_for_nodes']                  = (any) The request waits until the specified number N of nodes is available. It also accepts >=N, <=N, >N and <N. Alternatively, it is possible to use ge(N), le(N), gt(N) and lt(N) notation.
     * $params['wait_for_status']                 = (enum) One of green, yellow or red. Will wait (until the timeout provided) until the status of the cluster changes to the one provided or better, i.e. green > yellow > red. By default, will not wait for any status. (Options = green,red,yellow)
     * $params['pretty']                          = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                           = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']                     = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                          = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']                     = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function health(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\Health');
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }
    /**
     * Returns a list of any cluster-level changes (e.g. create index, update mapping,allocate or fail shard) which have not yet been executed.
     *
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['local']                   = (boolean) If `true`, the request retrieves information from the local node only.If `false`, information is retrieved from the master node. (Default = false)
     * $params['master_timeout']          = (string) Period to wait for a connection to the master node.If no response is received before the timeout expires, the request fails and returns an error.
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function pendingTasks(array $params = [])
    {
        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\PendingTasks');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Updates the cluster voting config exclusions by node ids or node names.
     *
     * $params['node_ids']    = (any) A comma-separated list of the persistent ids of the nodes to excludefrom the voting configuration. If specified, you may not also specify node_names.
     * $params['node_names']  = (any) A comma-separated list of the names of the nodes to exclude from thevoting configuration. If specified, you may not also specify node_ids.
     * $params['timeout']     = (string) When adding a voting configuration exclusion, the API waits for thespecified nodes to be excluded from the voting configuration beforereturning. If the timeout expires before the appropriate conditionis satisfied, the request fails and returns an error.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']       = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function postVotingConfigExclusions(array $params = [])
    {
        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\PostVotingConfigExclusions');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Creates or updates a component template.
     *
     * $params['name']                    = (string) Name of the component template to create. OpenSearch includes the following built-in component templates: `logs-mappings`; 'logs-settings`; `metrics-mappings`; `metrics-settings`;`synthetics-mapping`; `synthetics-settings`. OpenSearch Agent uses these templates to configure backing indices for its data streams. If you use OpenSearch Agent and want to overwrite one of these templates, set the `version` for your replacement template higher than the current version. If you don't use OpenSearch Agent and want to disable all built-in component and index templates, set `stack.templates.enabled` to `false` using the cluster update settings API.
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['create']                  = (boolean) If `true`, this request cannot replace or update existing component templates. (Default = false)
     * $params['master_timeout']          = (string) Period to wait for a connection to the master node.If no response is received before the timeout expires, the request fails and returns an error.
     * $params['timeout']                 = (string) Operation timeout.
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     * $params['body']                    = (array) The template definition (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function putComponentTemplate(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\PutComponentTemplate');
        $endpoint->setParams($params);
        $endpoint->setName($name);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Decommissions an awareness attribute.
     *
     * $params['awareness_attribute_name']  = (string) Awareness attribute name.
     * $params['awareness_attribute_value'] = (string) Awareness attribute value.
     * $params['pretty']                    = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                     = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']               = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                    = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']               = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function putDecommissionAwareness(array $params = [])
    {
        $awareness_attribute_name = $this->extractArgument($params, 'awareness_attribute_name');
        $awareness_attribute_value = $this->extractArgument($params, 'awareness_attribute_value');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\PutDecommissionAwareness');
        $endpoint->setParams($params);
        $endpoint->setAwarenessAttributeName($awareness_attribute_name);
        $endpoint->setAwarenessAttributeValue($awareness_attribute_value);

        return $this->performRequest($endpoint);
    }
    /**
     * Updates the cluster settings.
     *
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['flat_settings']           = (boolean) Return settings in flat format. (Default = false)
     * $params['master_timeout']          = (string) Explicit operation timeout for connection to master node
     * $params['timeout']                 = (string) Explicit operation timeout
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     * $params['body']                    = (array) The settings to be updated. Can be either `transient` or `persistent` (survives cluster restart). (Required)
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function putSettings(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\PutSettings');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Updates weighted shard routing weights.
     *
     * $params['attribute']   = (string) Awareness attribute name.
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']       = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function putWeightedRouting(array $params = [])
    {
        $attribute = $this->extractArgument($params, 'attribute');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\PutWeightedRouting');
        $endpoint->setParams($params);
        $endpoint->setAttribute($attribute);

        return $this->performRequest($endpoint);
    }
    /**
     * Returns the information about configured remote clusters.
     *
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']       = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function remoteInfo(array $params = [])
    {
        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\RemoteInfo');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Allows to manually change the allocation of individual shards in the cluster.
     *
     * $params['cluster_manager_timeout'] = (string) Operation timeout for connection to cluster-manager node.
     * $params['dry_run']                 = (boolean) If true, then the request simulates the operation only and returns the resulting state.
     * $params['explain']                 = (boolean) If true, then the response contains an explanation of why the commands can or cannot be executed.
     * $params['master_timeout']          = (string) Period to wait for a connection to the master node. If no response is received before the timeout expires, the request fails and returns an error.
     * $params['metric']                  = (any) Limits the information returned to the specified metrics.
     * $params['retry_failed']            = (boolean) If true, then retries allocation of shards that are blocked due to too many subsequent allocation failures.
     * $params['timeout']                 = (string) Period to wait for a response. If no response is received before the timeout expires, the request fails and returns an error.
     * $params['pretty']                  = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                   = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']             = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                  = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']             = (any) Comma-separated list of filters used to reduce the response.
     * $params['body']                    = (array) The definition of `commands` to perform (`move`, `cancel`, `allocate`)
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function reroute(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\Reroute');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Returns a comprehensive information about the state of the cluster.
     *
     * $params['metric']                    = (array) Limit the information returned to the specified metrics
     * $params['index']                     = (array) A comma-separated list of index names; use `_all` or empty string to perform the operation on all indices
     * $params['allow_no_indices']          = (boolean) Whether to ignore if a wildcard indices expression resolves into no concrete indices. (This includes `_all` string or when no indices have been specified)
     * $params['cluster_manager_timeout']   = (string) Operation timeout for connection to cluster-manager node.
     * $params['expand_wildcards']          = (any) Whether to expand wildcard expression to concrete indices that are open, closed or both.
     * $params['flat_settings']             = (boolean) Return settings in flat format. (Default = false)
     * $params['ignore_unavailable']        = (boolean) Whether specified concrete indices should be ignored when unavailable (missing or closed)
     * $params['local']                     = (boolean) Return local information, do not retrieve the state from cluster-manager node. (Default = false)
     * $params['master_timeout']            = (string) Specify timeout for connection to master
     * $params['wait_for_metadata_version'] = (number) Wait for the metadata version to be equal or greater than the specified metadata version
     * $params['wait_for_timeout']          = (string) The maximum time to wait for wait_for_metadata_version before timing out
     * $params['pretty']                    = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']                     = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']               = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']                    = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']               = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function state(array $params = [])
    {
        $metric = $this->extractArgument($params, 'metric');
        $index = $this->extractArgument($params, 'index');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\State');
        $endpoint->setParams($params);
        $endpoint->setMetric($metric);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }
    /**
     * Returns high-level overview of cluster statistics.
     *
     * $params['node_id']       = (array) Comma-separated list of node filters used to limit returned information. Defaults to all nodes in the cluster.
     * $params['flat_settings'] = (boolean) If `true`, returns settings in flat format. (Default = false)
     * $params['timeout']       = (string) Period to wait for each node to respond.If a node does not respond before its timeout expires, the response does not include its stats.However, timed out nodes are included in the response's `_nodes.failed` property. Defaults to no timeout.
     * $params['pretty']        = (boolean) Whether to pretty format the returned JSON response.
     * $params['human']         = (boolean) Whether to return human readable values for statistics.
     * $params['error_trace']   = (boolean) Whether to include the stack trace of returned errors.
     * $params['source']        = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']   = (any) Comma-separated list of filters used to reduce the response.
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function stats(array $params = [])
    {
        $node_id = $this->extractArgument($params, 'node_id');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Cluster\Stats');
        $endpoint->setParams($params);
        $endpoint->setNodeId($node_id);

        return $this->performRequest($endpoint);
    }
}